#include<iostream>
#include<stdio.h>
#include<string.h>
#include<fstream>
using namespace std;
class registration;
class vehicle;
class student;
class vehicle
{
      char col[10];
      char comp[50];
      char mod[50];
      int c,co,m;
      public:
             void get_vehicle_data()
             {
                  cout<<"enter cycle color"<<endl;
                  cin>>col;cout<<endl;
                  cout<<"enter cycle company name "<<endl;
                  cin>>comp;cout<<endl;
                  cout<<"enter cycle model"<<endl;
                  cin>>mod;cout<<endl;
             }
             void vehicle_data()
             {
                  ifstream in;
                  ofstream out;
                  ofstream x;
                  x.open("raj.txt");
                  in.open("student.txt");
                  out.open("registration.txt");
                  char ch;
                  cout<<"*************VEHICLE INFO****************"<<endl<<endl;
                  cout<<"cycle color : ";
                  cout<<col;
                  cout<<"       cycle company : ";
                  cout<<comp;cout<<endl;
                  cout<<"cycle model :  ";
                  cout<<mod;cout<<endl;
                  while(in.get(ch))
                  {
                                  
                                  out.put(ch);
                                  x.put(ch);
                  }
                  out<<endl<<col<<endl<<comp<<endl<<mod<<endl<<"X--X--X--X--X--X--X"<<endl;
                  x<<endl<<col<<endl<<comp<<endl<<mod<<endl<<"X--X--X--X--X--X--X"<<endl;
             }
};     
class student
{
      long int rollno;
      char name[50];
      char branch[50];
      char dept[50];
      int n,b,d;
      public:
             void get_student_data()
             {
                  
                  cout<<"enter student rollno"<<endl;
                  cin>>rollno;cout<<endl;
                  cout<<"enter student name"<<endl;
                  cin>>name;cout<<endl;
                  cout<<"enter branch"<<endl;
                  cin>>branch;cout<<endl;
                  cout<<"enter department name"<<endl;
                  cin>>dept;cout<<endl;
                
             }
             void student_data()
             {
                  ifstream in;
                  ofstream out;
                  in.open("temp.txt");
                  out.open("student.txt");
                  char ch;
                  cout<<"***********student details*************"<<endl<<endl;
                  cout<<"rollno :  "<<rollno;
                  cout<<"       student name :  ";
                  cout<<name;cout<<endl;
                  cout<<"branch :  ";
                  cout<<branch;
                  cout<<"       department :  ";
                  cout<<dept;cout<<endl;
                  while(in.get(ch))
                  {
                                  
                                  out.put(ch);
                  }
                  out<<endl<<rollno<<endl<<name<<endl<<branch<<endl<<dept;
                  in.close();
                  out.close();
             }
};
class registration
{
      student s1;
             vehicle v1;
      long int webid;
      char pwd[20];
      int n;
      public:
             void getdata()
             {
             int i;
                  cout<<"enter student webmail id"<<endl;
                  cin>>webid;cout<<endl;
                  cout<<"enter webmail password";
                  cin>>pwd;
                  cout<<endl;
                  s1.get_student_data();
                  v1.get_vehicle_data();
             }
             void putdata()
             {ofstream out;
             ifstream in;
             in.open("raj.txt");
             out.open("temp.txt");
             char ch;
                  cout<<"_____________________________________________"<<endl<<endl;
                  cout<<"***** YOUR DETAILS ARE AS UNDER *****"<<endl<<endl;
                  cout<<"webmail id :"<<webid<<endl;
                  while(in.get(ch))
                  {
                                  
                                  out.put(ch);
                  }
                  out<<webid<<endl<<pwd;
                  out.close();
             s1.student_data();
             v1.vehicle_data();
             }
};
int main()
{
    student s;
    vehicle v;
    registration r;
    int ch;
    arun:
    cout<<endl<<"Select what you want to do"<<endl;
    cout<<"press "<<endl<<"1:- To enter your new cycle registration information"<<endl<<"2:- exit "<<endl;
    cin>>ch;
    switch(ch)
    {
    case 1:
    cout<<"==============================================================================="<<endl;
    cout<<"The registration process starts from here, as the student comes and registers his/her cycle at the vehicle security database"<<endl;
    cout<<"_______________________________________________________________________________"<<endl<<endl;
    
    r.getdata();
    system("pause");
         system("cls");
         cout<<" your registration information "<<endl;
    r.putdata();
    goto arun;
    break;
    case 2:
      exit(0); 
      default:
              goto arun;  
      }
    system("pause");
    return 0;
}
