#include <stdio.h>
main() {
int  Nilai_IQ ;
printf("Nilai IQ =  ");
scanf("%i",&Nilai_IQ);
if (Nilai_IQ <=100){
    printf("kurang");
}
else if (Nilai_IQ<=120){
    printf("cerdas");
}
else if (Nilai_IQ <=130){
    printf("sangat cerdas");
}
else if  (Nilai_IQ >=131){
    printf("jenius");
}
}
