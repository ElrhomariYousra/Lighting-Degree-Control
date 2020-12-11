#include <stdio.h>
#include <string.h>
#include <unistd.h>
#include <stdlib.h>

#include "/home/yousra/Projet_Soft_Embarqué/Serveur/Drivers/io.h"

#include <time.h>

int main(int argc, char  *argv[])
{
	S_GPIO_LINE s_line7 , s_line8 , s_line9, s_line10 , s_line11, s_line12;
	int sw= 1 ;

	if(argc != 3)
	{
		printf("Entrer parametres \n");
		return 1 ;
	}

	int led = atoi(argv[1]);
	int state = atoi(argv[2]);


	switch(led)
	{
		case 0 :
			load_gpio_line(&s_line8,PB_RED,OUT);
			s_line7 = s_line8 ;
		break;

		case 1 :
			load_gpio_line(&s_line9, PB_RED_RGB, OUT);
			s_line7 = s_line9 ;
		break ;

		case 2 :
			load_gpio_line(&s_line10, PB_GREEN, OUT);
			s_line7 = s_line10 ;
		break;
		case 3 :
			load_gpio_line(&s_line11, PB_BLUE, OUT);
			s_line7 = s_line11 ;
		break;

		case 4 :
			load_gpio_line(&s_line12, PB_WHITE, OUT);
			s_line7 = s_line12 ;
		break;
		default :
			printf("Led Number 0-3\n");
			return 1 ;
	}


	switch(state)
	{
		case 0 : 
			set_gpio_line(&s_line7, !sw);
		break ;

		case 1 : 
			set_gpio_line(&s_line7, sw);
		break ;

		default :
			printf("ON : 1 / OFF :0 ");
			return 1 ;
	}

}