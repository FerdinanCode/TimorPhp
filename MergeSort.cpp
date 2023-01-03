#include <iostream>
#include <vector>

using namespace std;

void printElems(vector < int > list){
	int i;
	int len = list.size();
	for (i = 0; i < len; i++)
		cout << list[i] << " ";
}
void merge(vector <int> & a, int low, int high, int mid){
	int i, j, k;
	int c[50];
	i = low;
	k = low;
	j = mid + 1;
	
	while (i <= mid && j <= high) {
		if (a[i] < a[j]){
			c[k] = a[i];
			k++;
			i++;
		} else {
			c[k] = a[j];
			k++;
			j++;
		}
	}
	while (i <= mid){
		c[k] = a[i];
		k++;
		i++;
	}
	while (j <= high){
		c[k] = a[j];
		k++;
		j++;
	}
	for (i = low; i < k; i++){
		a[i] = c[i];
	}
}
void mergeSort (vector < int > & a,int low, int high){
	int mid;
	if (low < high){
		mid = (low + high) /2;
		mergeSort (a, low, high);
		mergeSort (a, mid + 1, high);
		merge (a, low, high, mid);
	}
}
int main () {
	int i, num, n;
	vector < int > v;
		cout << "\n\nWelcome :-)\n\n\n";
		cout << "==== Program Merge Sort ====\n\n";
		cout << "Masukkan data yang ingin di sort :";
		cin >> n;
		cout << "\n\n";	
	for (i = 0; i < n; i++){
		cout << "Masukkan data" << i + 1 << " : ";
		cin >> num;
		v.push_back(num);
	}
	cout << "\n\nElemen sebelum di sort : ";
		printElems(v);
		mergeSort(v,0,n-1);
	cout << "\n\nElemen sesudah di sort : ";
		printElems(v);
		cout << "\n\n\n";
	
	return 0;
}
