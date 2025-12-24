#include <stdio.h>
#include <stdlib.h>
#include <windows.h>

char frase1[100] = "A\033[1;32m Decdificando\033[0;37m voltou de cara nova!\n\033[32m:)\033[37m\n\n\n";
char frase9[100] = "Com novos quadros e conteúdos fresquinhos pra você!\n";
char frase10[120] = "   ☞  TechNews \n\033[3;90m\t(fique por dentro das noticias mais recentes da área de tecnologia)\033[0;37m\n";
char frase11[100] = "   ☞  Faixa Hacker \n\033[3;90m\t(Aprenda ferramentas que hackers usam e se proteja)\033[0;37m\n\n\n";
char frase2[100] = "\033[1;37mConfira a nova programação!\n\n";
char frase3[100] = "\n\033[3;37mIniciando...\033[0;37m \n";
char frase4[120] = "\n\n\n\n\033[4;37mSegunda-Feira\033[0;37m\n    ☞  Programação da semana\n    ☞  Curiosidades na programação \n\n\n";
char frase5[100] = "\033[4;37mTerça-Feira\033[0;37m\n    ☞  TechNews\n\n\n";
char frase6[100] = "\033[4;37mQuarta-Feira\033[0;37m\n    ☞  Post no feed\n\n\n";
char frase7[100] = "\033[4;37mQuinta-Feira\033[0;37m\n    ☞  Faixa Hacker (a partir de Fevereiro)\n\n\n";
char frase8[100] = "\033[4;37mSexta-Feira\033[0;37m\n    ☞  Post no feed\n    ☞  TechNews\n\n\n";
char frase12[100] = "Não esqueça do \u2764\nE de Seguir a gente para não perder nada\n\n\n";


void PrintFrase(char frase[], int k);
void FastPrintFrase(char frase[], int k);
void Carregamento();
void PularLinha();
void FraseRapida(int i);
void BlinkLogo();


int main() {
    system("chcp 65001");
    system("cls");
    
    PrintFrase(frase1, 70);
    PrintFrase(frase9, 55);
    FastPrintFrase(frase10, 110);
    FastPrintFrase(frase11, 100);
    
    PrintFrase(frase2, 40);
    PrintFrase(frase3, 30);

    Carregamento();

    PrintFrase(frase4, 120);
    PrintFrase(frase5, 55);
    PrintFrase(frase6, 55);
    PrintFrase(frase7, 75);
    PrintFrase(frase8, 80);

    PrintFrase(frase12, 80);

    BlinkLogo();

    return 0;
}


void PrintFrase(char frase[], int k) {
    for (int i = 0; i < k; i++) {
        printf("%c", frase[i]);
        Sleep(50);
    }  
}

void FastPrintFrase(char frase[], int k) {
    for (int i = 0; i < k; i++) {
        printf("%c", frase[i]);
        Sleep(30);
    }  
}

void Carregamento(){
    float multip = 1.01;

    printf("|=================================|======|\n");

    for (int porcentagem = 1; porcentagem <= 33; porcentagem++)    // a porcentagem sobe em 9
    {
        printf("|");

        if (porcentagem * 3 < 99) {
            for (int barra = 0; barra < porcentagem; barra++)     //completa a barra de carregamento dependendo da poecentagem
                printf("\033[0;33m#");
            for (int espaco = porcentagem; espaco < 33; espaco++)    // cria os espaços da barra até o fim
                printf(" ");
            
            printf("\033[0;37m|\033[0;33m%4d%% \033[0;37m|\n", porcentagem * 3);    // exibe a linha de porcentagem de 0 a 99
        }

        else{
            for (int barra = 0; barra < porcentagem; barra++)     //completa a barra de carregamento dependendo da poecentagem
                printf("\033[0;32m#");
            for (int espaco = porcentagem; espaco < 33; espaco++)    // cria os espaços da barra até o fim
                printf(" ");

            printf("\033[0;37m|\033[0;32m%4d%% \033[0;37m|\n", porcentagem * 3 + 1);
        }
        
            printf("|=================================|======|\n");
            
            Sleep(100 * multip);
            printf("\e[A\e[A");

            multip += 0.012;
    }
}

void BlinkLogo(){
    puts("<\\>");
    Sleep(800);
    printf("\e[A\e[2K");
    Sleep(800);
    BlinkLogo();
}