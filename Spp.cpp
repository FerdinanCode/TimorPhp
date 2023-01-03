#include <iostream>
#include <conio.h>
using namespace std;

struct mhs {
	char nama [20], nim[10], jurusan[2];
	int sks, program;
};
struct mhs bayar;
main() {
	int bts, var, tetap;
	
	cout <<"Nama Mhs = "; cin >> bayar.nama;
	cout <<"Nim		 = "; cin >> bayar.nim;
	cout <<"Jurusan[TI,MI,SI]= "; cin >> bayar.jurusan;
	input :
		cout <<"Program[1=D3, 2=S1] = "; cin >> bayar.program;
		if (bayar.program < 0 || bayar.program > 2) {
			cout <<"Program Tidak Sesuai";
			goto input;
		}
		cout <<"Jumlah sks = "; cin >> bayar.sks;
		
		if (bayar.program==1) {
			tetap=5000000;
			var=bayar.sks*25000;
		}
		else if (bayar.program==2) {
			tetap=750000;
			var=bayar.sks*50000;
		}
		cout <<" ";
		
		cout << "\n\n_____________________________________\n";
		cout << "\n\n				Output 				  \n";
		cout << "\n\n_____________________________________\n";
		cout << "\nNama Mhs     = " <<bayar.nama;
		cout << "\nNim		    = " <<bayar.nim;
		cout << "\nJurusan      = " <<bayar.jurusan;
		cout << "\nProgram      = " <<bayar.program;
		cout << "\nJumlah Sks   = " <<bayar.sks;
		cout << "\n Spp tetap   = " <<tetap;
		cout << "\nSpp Variabel = " <<var;
		cout << endl; 
}
