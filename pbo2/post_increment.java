import java.util.Scanner;

class Post_increment {
    public static void main(String args[]){
       
    int a = 10; 
    System.out.println("# Post Increment #"); 
    System.out.println("=================="); 
    System.out.println("Isi variabel a: " + a); 
    System.out.println("Isi variabel a: " + a++);
    System.out.println("Isi variabel a: " + a);
     
    System.out.println();
     
    int b = 10; 
    System.out.println("# Pre Increment #"); 
    System.out.println("=================="); 
    System.out.println("Isi variabel b: " + b); 
    System.out.println("Isi variabel b: " + ++b);
    System.out.println("Isi variabel b: " + b); 
     
    }
  }