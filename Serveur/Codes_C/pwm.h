#define PWM_H_

#define PWM0 "0"
#define PWM1 "1"   

#define PERIOD1 10000000
#define PERIOD2 8000000
  

/*Structure of pwm gpio*/
struct S_GPIO_LINE {
    char id[4]; int period; int duty_cycle; int enable;
};typedef struct S_GPIO_LINE S_GPIO_LINE;

/* Prototypes of functions*/
int load_gpio(S_GPIO_LINE *ps_line, char id[4]);
int set_period(S_GPIO_LINE *ps_line, int period);
int set_duty_cycle(S_GPIO_LINE *ps_line,int duty_cycle);
int enable_pwm(S_GPIO_LINE *ps_line , int enable);
