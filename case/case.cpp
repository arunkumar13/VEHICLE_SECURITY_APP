#include<iostream>
#include<stdio.h>
#include<string.h>
#include<fstream>
using namespace std;
class vehicle
{
      char col[20];
      char comp[20];
      char mod[20];
      int c,co,m;
      public:
             void get_vehicle_data()
             {
                  ofstream out("registration.txt");
                  fflush(stdin);cout<<endl;
                  cout<<"enter cycle color"<<endl;
                  cin>>col;cout<<endl;
                  out<<col<<endl;
                  cout<<"enter cycle company name "<<endl;
                  fflush(stdin);cout<<endl;
                  cin>>comp;cout<<endl;
                  out<<comp<<endl;
                  cout<<"enter cycle model"<<endl;
                  fflush(stdin);cout<<endl;
                  cin>>mod;cout<<endl;
                  out<<mod<<endl;
             }
             void vehicle_data()
             {
                  cout<<"cycle color :";
                  //for(int i=0;i<=strlen(col)-1;i++)
                  cout<<col;cout<<endl;
                  cout<<"cycle company :";
                  //for(int j=0;j<=strlen(comp)-1;j++)
                  cout<<comp;cout<<endl;
                  cout<<"cycle model :";
                  //for(int k=0;k<=strlen(mod)-1;k++)
                  cout<<mod;cout<<endl;
             }
};     
class student
{
      long int rollno;
      char name[20];
      char branch[20];
      char dept[20];
      int n,b,d;
      public:
             void get_student_data()
             {
                  ofstream out("registration.txt");
                  cout<<"enter student rollno"<<endl;
                  cin>>rollno;cout<<endl;
                  out<<rollno<<endl;
                  cout<<"enter student name"<<endl;
                  fflush(stdin);cout<<endl;
                  cin>>name;cout<<name<<endl;
                  out<<name<<endl;
                  cout<<"enter branch"<<endl;
                  fflush(stdin);cout<<endl;
                  cin>>branch;cout<<endl;
                  out<<branch<<endl;
                  cout<<"enter department name"<<endl;
                  fflush(stdin);cout<<endl;
                  cin>>dept;cout<<endl;
                  out<<dept<<endl;
             }
             void student_data()
             {
                  cout<<"rollno :"<<rollno<<endl;
                  cout<<"student name :";
                 // for(int i=0;i<=strlen(name)-1;i++)
                  cout<<name;cout<<endl;
                  cout<<"branch :";
                  //for(int j=0;j<=strlen(branch)-1;j++)
                  cout<<branch;cout<<endl;
                  cout<<"department :";
                  //for(int k=0;k<=strlen(dept)-1;k++)
                  cout<<dept;cout<<endl;
             }
};
class registration
{     student s1;
      vehicle v1;
      long int webid;
      char pwd[20];
      int n;
      public:
             void getdata()
             {
             ofstream out("registration.txt");
             int i;
                  cout<<"enter student webmail id"<<endl;
                  cin>>webid;
                  fflush(stdin);cout<<endl;
                  out<<webid<<endl;
                  cout<<"enter webmail password"<<endl;
                  cin>>pwd;
                  cout<<pwd[0];
                  cout<<strlen(pwd);
                  char ch;
                  cin>>ch;
                  cout<<endl;
                  out<<pwd<<endl;
                  out.close();
                  s1.get_student_data();
                  v1.get_vehicle_data();
             }
             void putdata()
             {
                 system("cls");
                  cout<<"webmail id :"<<webid<<endl;
             s1.student_data();
             v1.vehicle_data();
             }
};
int main()
{
    student s;
    vehicle v;
    registration r;
    r.getdata();
    r.putdata();
    system("pause");
    return 0;
}
