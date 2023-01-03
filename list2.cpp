#include <conio.h>
#include <iostream>
#include <stdio.h>
#include <cstdlib>
#include <string.h>

using namespace std;

typedef struct TNode { //Proses pembuatan deklarasi single linked list non circular 
int data; //deklarasi "data" menggunakan tipe data integer
TNode *next; //deklarasi penunjuk (pointer) dengan selanjutnya (*Next)
};
TNode *head; //deklarasi head sebagai pointer utama

void init(){ //inisialisasi linked list non circulat 
head=NULL; //memberikan nilai kepada head, yaitu NULL
}

int periksaKosong(){ //mengecek kekosongan data pada program
if(head==NULL) // jika headnya null maka program akan mereturn 1
return 1;
else
return 0; //jika ternyata headnya tidak NULL, maka program akan mereturn 0
}

void masukDepan(int n){ //menambahkan data lagi pada awal list program
TNode *lagi; //deklarasi TNode untuk digunakan menjadi pointer lagi
lagi=new TNode; //memberikan nilai pada lagi, yaitu TNode lagi (data lagi)
lagi->data=n; //memberikan nilai pada pointer lagi, yaitu data yang berisi variabel n
lagi->next=NULL; //memberuikan nilai pada pointer lagi, yaitu pointer next, yang berisi NULL
if(periksaKosong()==1){ //memeriksa kekosongan data, jika iya maka program akan berjalan seperti tadi
head=lagi;
head->next=NULL;
}
else {
lagi->next=head;
head=lagi;
}
cout<<"Data Terisi";
}

void masukBelakang(int n){ //menambahkan data lagi pada akhir list program 
TNode *lagi,*help; //pointer yang digunakan yaitu lagi dan help
lagi=new TNode;
lagi->data=n;
lagi->next=NULL;
if (periksaKosong()==1){
head=lagi;
head->next=NULL;
}
else {
help=head;
while(head->next!=NULL){
help=help->next;
}
help->next=lagi;

}
cout<<"Data Terisi";
}

void tampil(){ //fungsi untuk menampilkan linked list yang telah di input / di delete
TNode *help; //pointer yang digunakan yaitu help
help=head; //Nilai help= Nilai yang ada di head
if(periksaKosong()==0){ //periksa apakah return 0(bernilai)
while(help!=NULL){ //selama help tidak sama dengan NULL, maka di eksekusi
cout<<help->data<<endl; //tampilkan di monitor nilai help->data
help=help->next; //nilai help= nilai help selanjutnya
}
}
else 
cout<<"Masih kosong"<<endl;
}

void bersihDepan(){ //fungsi untuk menghapus nilai paling depan
TNode *hapus;
int d;
if(periksaKosong){ //periksa apakah return 0(ada nilai)
if(head!=NULL){ //jika head tidak sama dengan null maka :
hapus=head; //pointer hapus =head
d=hapus->data; //nilai dari d = nilai dari hapus->data
head=hapus->next; //nilai head sekarang berisi nilai hapus->next
delete hapus; //fungsi untuk menghapus nilai yang ada di pointer hapus
}
cout<<d<<"Terhapus"<<endl;
}
else
cout<<"Masih Kosong"<<endl;
}

main(){ //fungsi utama dari program
int pil;
do{
system("CLS");
int n;
cout<<"1. Masukan DAta di Depan"<<endl;
cout<<"2. Masukan Data di Belakang"<<endl;
cout<<"3. Tunjukan Datanya"<<endl;
cout<<"4. Hapus Datanya"<<endl;
cout<<"5. Keluar dari Program"<<endl;
cout<<"6. Masukan Pilihan Anda";pil=getche();
switch(pil){
	case '1' : system("CLS");
	cout<<"Masukan Data :";cin>>n;
	periksaKosong();
	masukDepan(n);
	break;
	case '2' : system("CLS");
	cout<<"Masukan Data :";cin>>n;
	periksaKosong();
	masukBelakang(n);
	break;
	case '3' : system("CLS");
	periksaKosong();
	tampil();
	break;
	case '4' : system("CLS");
	periksaKosong();
	bersihDepan();
	break;
}
getch();
}while(pil!='5');
return 0;
}
