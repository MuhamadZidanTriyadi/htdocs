def garis():
    print("-----------------------------------")

def sort_asc(array):
    n = len(array) 
    
    for i in range(n):
        
        for j in range(n-i-1):
            
            if array[j] > array[j+1]:
                array[j], array[j+1] = array[j+1], array[j]
    return array

def sort_desc(array):
    n = len(array) 
    for i in range(n):

        for j in range(n-i-1):
            
            if array[j] < array[j+1]:
                array[j], array[j+1] = array[j+1], array[j]
    return array

#fungsi rata rata
def rata_rata(angka):
    return sum(angka)/len(angka)

#input nilai
garis()
print("Masukan Tiga Buah Nilai")
nilai_a = int(input("Nilai A : "))
nilai_b = int(input("Nilai B : "))
nilai_c = int(input("Nilai C : "))
angka = [nilai_a, nilai_b, nilai_c]
garis()
print()

#nilai akhir
print("HASIL AKHIR----")
print("Urutan Nilai Ascending : ",(sort_asc(angka)))
print("Urutan Nilai Descending : ",(sort_desc(angka)))

#angka terbesar
print("Nilai MAX : ", max(angka))

#angka terkecil
print("Nilai MIN : ", min(angka))

#rata rata
print("Nilai Rata Rata : ", (rata_rata(angka)))