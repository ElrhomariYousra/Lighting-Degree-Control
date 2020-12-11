#include <string.h>
#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>

#include "pwm.h"

/* Structure for GPIO :
              Number GPIO : 0 for PWM0 and 1 for PWM1
              perid ,
              duty_cycle,
              enable
              */

/* access pwm0 : GPIO18 */
/* access pwm1 : GPIO19 */

int load_gpio(S_GPIO_LINE *ps_line, char id[4]){
    
    FILE *p_gpio_line; /* Pointer on a file descriptor */

    /* open file export to acces pwm by writing 0 or 1
      0 : for pwm0
      1 : for pwm1

      exemple : echo 0 > /sys/class/pwm/pwmchip0/export 

     */
    if ((p_gpio_line = fopen("/sys/class/pwm/pwmchip0/export", "w")) == NULL){
        printf("Cannot open export file.\n");
        exit(1);
    }

    rewind(p_gpio_line); /* set cursorto the beginning*/
    strcpy(ps_line->id, id); /* Copy the 'id' of GPIO to the 'id_number' of the structure
                                              of the GPIO */
    fwrite(&ps_line->id, sizeof(char), 2, p_gpio_line); /* write to file */
    fclose(p_gpio_line); 

    return 0;
}

int set_period(S_GPIO_LINE *ps_line, int period){
    FILE *p_gpio_period;
    FILE *p_gpio_enable; 
    char gpio_period[50]; 
    char c_period[15];

    /* stock path of period file in gpio_period*/

     sprintf(gpio_period, "/sys/class/pwm/pwmchip0/pwm%s/period", ps_line->id);
      /* Concatenate with GPIO number */

    if ((p_gpio_period = fopen(gpio_period, "w")) == NULL){
            printf("Cannot open period file.\n");
            exit(1);}

        rewind(p_gpio_period); 
        sprintf(c_period, "%d", period); /* Stock period in c_period */
        ps_line->period = period;
        fwrite(&c_period, sizeof(char), 10, p_gpio_period); /* write in period file */
        fclose(p_gpio_period); /* close file */

    return 0;
}


/*  Same thing to configure the duty_cyle the duty_cycle file*/ 

int set_duty_cycle(S_GPIO_LINE *ps_line,int duty_cycle){
     FILE *p_gpio_duty_cycle;
    
    char gpio_duty_cyle[50]; 
    char c_duty_cyle[15]; 

     sprintf(gpio_duty_cyle, "/sys/class/pwm/pwmchip0/pwm%s/duty_cycle", ps_line->id); 
        if ((p_gpio_duty_cycle = fopen(gpio_duty_cyle, "w")) == NULL){
            printf("Cannot open value duty_cycle file.\n");
            exit(1);
        }
        rewind(p_gpio_duty_cycle); 
        sprintf(c_duty_cyle, "%d", duty_cycle); /* Store value in c_value */
        ps_line->duty_cycle = duty_cycle; /* Set corresponding value in the structure */
        fwrite(&c_duty_cyle, sizeof(char), 10, p_gpio_duty_cycle); /* write in duty_cycle file */
        fclose(p_gpio_duty_cycle); /* close duty_cycle file*/

    return 0;
}

/* we should enable the pwm0 or pwm1 by sitting 1 in the enable file */

int enable_pwm(S_GPIO_LINE *ps_line , int enable){

   FILE *p_gpio_enable; /*file*/
   char gpio_enable[50]; 
   char c_enable[15];

    sprintf(gpio_enable, "/sys/class/pwm/pwmchip0/pwm%s/enable", ps_line->id); 
        /* Setting value: Open file for writting */
        if ((p_gpio_enable = fopen(gpio_enable, "w")) == NULL){
            printf("Cannot open value duty_cycle file.\n");
            exit(1);
        }
        rewind(p_gpio_enable); 
        sprintf(c_enable, "%d", enable); /* stock value in c_enable*/
        ps_line->enable = enable; 
        fwrite(&c_enable, sizeof(char), 10, p_gpio_enable); /* write in enable file */
        fclose(p_gpio_enable); /* close enable file */

    return 0;
}
