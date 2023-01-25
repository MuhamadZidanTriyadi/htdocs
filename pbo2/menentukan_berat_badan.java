import java.util.Scanner;
public class menentukan_berat_badan {
    public static void main(String[] args) throws Exception {
        Scanner input = new Scanner(System.in);
        int jenis_kelamin, hasil;
        float berat, tinggi, bmi, meter;
        double broca;
        
        // main menu
        System.out.println(" program java menghitung berat badan ideal ");
        System.out.println("+++++++++++++++++++++++++++++++++++++++++++");
        System.out.println("jenis kelamin: ");
        System.out.println(" 1. laki laki");
        System.out.println(" 2. perempuan");
        System.out.println("_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _");
        
        // logic
        System.out.print("masukan jenis kelamin: ");
        jenis_kelamin = input.nextInt();
        System.out.print("masukan berat badan:");
        berat = input.nextFloat();
        System.out.print("masukan tinggi badan:");
        tinggi = input.nextFloat();
        meter = tinggi / 100;
        
        // rumus BMI (body mass index)
        
        bmi = (berat/(meter * meter));
        
        // cetak berat badan bmi
        System.out.print("BMI: " + bmi + " ");
        
        if (bmi <18.5){
            System.out.println("kurus");
        } else if (bmi <= 22.9){
            System.out.println("normal");
        } else if (bmi < 24.9) {
            System.out.println("overweight");
        } else {
            System.out.println("obesitas");
        }
        // perhitungan rumus broca
        switch (jenis_kelamin)
        {
            case 1 : broca = ((tinggi-100)-(0.10 * (tinggi-100))); break;
            case 2 : broca = ((tinggi-100)-(0.15 * (tinggi-100))); break;
            default : broca = 0;
        }
        hasil = (int) broca;
        System.out.println("berat badan ideal anda menurut broca" + hasil + " KG");
        
    }
}