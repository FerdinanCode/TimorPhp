#include <iostream>
using namespace std;

int main() {
	int banyakA;
	int x[100];
	cout<<"masukkan banyak array :";
	cin>>banyakA;
	for(int m=0;m<banyakA;m++) {
		cout<<"masukkan array ke "<<m<<" :";
		cin>>x[m];
	}
	cout<<"array awal adalah :" <<endl;
	int y=banyakA-2;
	int param;
	for(int m=0;m<banyakA;m++) {
		cout<<x[m]<<" ";
	}
	cout<<endl<<endl<<"mulai proses shorting"<<endl;
	
	while(y >= 0) {
		int index = 0;
		while(index <= y) {
			if(x[index] > x[index+1]) {
				param = x[index];
				x[index] = x[index+1];
				x[index+1] = param; 
			}
			index++;
		}
		for(int m=0;m<banyakA;m++) {
			cout<<x[m]<<" ";
		}
		cout<<endl;
		  y--;
	    }
	    
	    cout <<"hasil shortingnya adalah:"<<endl;
	    
	    for(int m=0;m<banyakA;m++){
	    	cout<<x[m]<<" ";
		}
}
