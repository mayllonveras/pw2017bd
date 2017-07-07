#include <iostream>
#include <vector>
using namespace std;

int main(){
	string s;
	int t = 0;
	while(true){
		std::vector<char> v;
		getline(cin, s);
		if(s == "0") break;
		for (int i = 0; i < s.size(); ++i)
			if(s[i] != ' ') v.push_back(s[i]);
		for (int i = 0; i < v.size()-1; ++i)
			cout << v[i];
		cout << endl;

	}
	return 0;
}