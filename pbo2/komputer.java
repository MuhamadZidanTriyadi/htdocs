public class komputer {
  class laptop {

      // buat 3 property untuk class Laptop
      String pemilik;
      String merk;
      double ukuranLayar;
      
      // buat 2 method untuk class Laptop
      String hidupkanLaptop() {
        return "Hidupkan Laptop";
      }
      
      String matikanLaptop() {
        return "Matikan Laptop";
      }
    };
     
    class BelajarJava {
     
      public static void main(String args[]){
        komputer laptopAndi = new komputer();
      }
       
    }
}