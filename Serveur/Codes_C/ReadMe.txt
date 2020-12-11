** Configuration PWM ********


*** access pwm0 *** GPIO18

echo 0 > /sys/class/pwm/pwmchip0/export 

*** Or access pwm1 *** GPIO19

echo 1 > /sys/class/pwm/pwmchip0/export 

** we will have new folder created pwm0 *** 

*** configure period ***

echo 10000000 > /sys/class/pwm/pwmchip0/pwm0/period

*** configure duty_cycle ***

echo 8000000 > /sys/class/pwm/pwmchip0/pwm0/duty_cycle

*** enable pwm0 *** 

echo 1 > pwm0/enable

