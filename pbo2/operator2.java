import java.util.Scanner;

class operator2 {
    public static void main(String args[]){
      
      int a = 10, b = 10, c = 10, d = 10, e = 10, f = 10; 
      
      System.out.println("Operator assignment gabungan bahasa Java");  
      System.out.println("========================================"); 
      System.out.println("Variabel a, b, c, d, e, f = 10 \n"); 
      
      a += 5;
      System.out.println("Hasil operasi a += 5: "+ a);
      
      b -= 3;
      System.out.println("Hasil operasi b -= 3: "+ b);
      
      c *= 3;
      System.out.println("Hasil operasi c *= 3: "+ c);
      
      d /= 3;
      System.out.println("Hasil operasi d /= 3: "+ d);
      
      e %= 3;
      System.out.println("Hasil operasi e %= 3: "+ e);
      
      f <<= 2;
      System.out.println("Hasil operasi f <<= 2: "+ f);
      
    }
  }
