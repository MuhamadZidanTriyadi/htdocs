public class cetak {
 
        // Method sama namun parameter berbeda 
        // Tipe data double
        static double maxNumber(double a, double b) {
            if (a < b) {
                return a;
            }else{
                return b;
            }   
        }
     
        // Method sama, namun parameter berbeda
        // Tipe data int
        static int maxNumber(int a, int b) {   
            if (a < b){
                return a;
            }else {
                return b;
            }
        }
     
        public static void main(String[] argrs) {
            System.out.println(maxNumber(5.5, 7.5));
            System.out.println(maxNumber(10, 20));
        }
     
    }
    
}
