import java.util.Scanner;

class perbandingan2 {
    public static void main(String args[]){
           
      boolean hasil;
        
      hasil = (5 > 4) && (10 > 9);
      System.out.println("(5 > 4) && (10 > 9) : " + hasil );   
   
      hasil = (15 <= 15) && (15 < 15);
      System.out.println("(15 <= 15) && (15 < 15) : " + hasil );  
   
      hasil = ('a' == 'a') || ('a' == 'b');
      System.out.println("('a' == 'a') || ('a' == 'b') : " + hasil );  
   
      hasil = (10 > 7) && ("duniailkom" == "duniailkom");
      System.out.print("(10 > 7) && (\"duniailkom\" == \"duniailkom\") : ");
      System.out.println( hasil );      
       
    }
  }