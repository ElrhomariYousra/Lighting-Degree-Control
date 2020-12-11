#include <stdio.h>
#include <string.h>
#include <unistd.h>
#include <stdlib.h>

#include "pwm.h"


int main(int argc, char  *argv[])
{
	S_GPIO_LINE s_line7 , s_line8 , s_line9, s_line10 , s_line11;
	int sw= 1 ;

	if(argc != 5)
	{
		printf("Enter parameters \n");
		return 1 ;
	}
        /* Variables */

	int pwm_number = atoi(argv[1]);
	int period = atoi(argv[2]);
	int duty_cycle = atoi(argv[3]);
	int enable = atoi(argv[4]);


	switch(pwm_number)
	{
		case 0 :
			load_gpio(&s_line8,PWM0);
			s_line7 = s_line8 ;
		break;

		case 1 :
			load_gpio(&s_line9, PWM1);
			s_line7 = s_line9 ;
		break ;

		default :
			printf("Choose pwm0 or pwm1\n");
			return 1 ;
	}

	printf("%d\n", period);
	printf("%d\n", duty_cycle);
	printf("%d\n", enable);
    set_period(&s_line7, period);
    set_duty_cycle(&s_line7,duty_cycle);
    enable_pwm(&s_line7, enable);
		
}
