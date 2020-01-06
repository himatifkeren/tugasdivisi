#include <stdio.h>

main ()
{
    int A, B, C, MAKS;

    printf ("A = ");
    scanf ("%i", &A);
    printf ("B = ");
    scanf ("%i", &B);
    printf ("C = ");
    scanf ("%i", &C);

    if (A>B && A>C) {
        MAKS=A;}
    else if (B>A && B>C){
        MAKS=B;}
    else {
        MAKS=C;}

    printf ("Nilai Maksimalnya = %i", MAKS);
}
