#define IO_H_


#define PB_RED "17"
#define PB_RED_RGB "27"
#define PB_GREEN "22"   
#define PB_BLUE "23" 
#define PB_WHITE "5"   
   

#define LOW  0
#define HIGH 1
#define IN   1
#define OUT  0

struct S_GPIO_LINE {
    char id_number[4];
    int direction;
    int value;
};
typedef struct S_GPIO_LINE S_GPIO_LINE;


int load_gpio_line(S_GPIO_LINE *ps_line, char id_number[4], int i_direction);
int set_gpio_direction(S_GPIO_LINE *ps_line, int i_direction);
int set_gpio_line(S_GPIO_LINE *ps_line, int value);
int get_gpio_line(S_GPIO_LINE *ps_line);

