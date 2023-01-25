def urutasc(mylist):
    for i in range(len(mylist)-1, 0, -1):
        for j in range(i):
            if mylist[j] > mylist[j+1]:
                simpan = mylist[j]
                mylist[j] = mylist[j+1]
                mylist[j+1] = simpan 
    print(mylist)

def urutdsc(mylist):
    for i in range(len(mylist)-1, 0, -1):
        for j in range(i):
            if mylist[j] < mylist[j+1]:
                simpan = mylist[j]
                mylist[j] = mylist[j+1]
                mylist[j+1] = simpan 
    print (mylist)



print("Program Mengurutkan Data Dengan Metode Bubble Sort")

angka1 = int(input('Masukkan Bilangan Ke 1 :'))
angka2 = int(input('Masukkan Bilangan Ke 2 :'))
angka3 = int(input('Masukkan Bilangan Ke 3 :'))
angka4 = int(input('Masukkan Bilangan Ke 4 :'))
angka5 = int(input('Masukkan Bilangan Ke 5 :'))
angka6 = int(input('Masukkan Bilangan Ke 6 :'))
angka7 = int(input('Masukkan Bilangan Ke 7 :'))
angka8 = int(input('Masukkan Bilangan Ke 8 :'))
angka9 = int(input('Masukkan Bilangan Ke 9 :'))
angka10 = int(input('Masukkan Bilangan Ke 10 :'))

angka =[angka1,angka2,angka3,angka4,angka5,angka6,angka7,angka8,angka9,angka10]

print('=============================================')
print('Pilih Metode Pengurutan :' )
print('1.Sorting Ascending \n2.Sorting Descending')
pilih= input('Metode Yang Dipilih : ')

print('=============================================')
print('Data Sebelum Diurutkan : ')
print(angka)
print('Data Setelah Diurutkan : ')

if pilih == ('1'):
    urutasc(angka)
elif pilih == ('2'):
    urutdsc(angka)
else:
    print("Angka Yang Anda Tulis Salah")

home = input('Kembali Kemenu Utama (Y/N)? ')
text = print('Program Mengurutkan Data Dengan Metode Bubble Sort')
back = print('')
garis = ('=============================')
if home == ('Y'):
    garis
    text
    angka1 = int(input('Masukkan Bilangan Ke 1 : '))
    angka2 = int(input('Masukkan Bilangan Ke 2 : '))
    angka3 = int(input('Masukkan Bilangan Ke 3 : '))
    angka4 = int(input('Masukkan Bilangan Ke 4 : '))
    angka5 = int(input('Masukkan Bilangan Ke 5 : '))
    angka6 = int(input('Masukkan Bilangan Ke 6 : '))
    angka7 = int(input('Masukkan Bilangan Ke 7 : '))
    angka8 = int(input('Masukkan Bilangan Ke 8 : '))
    angka9 = int(input('Masukkan Bilangan Ke 9 : '))
    angka10 = int(input('Masukkan Bilangan Ke 10 : '))
    garis 
    print('Pilih Metode Pengurutan : ')
    print('1. Sorting Ascending')
    print('2. Sorting Descending')
    pilih = input('Metode Yang Dipilih :')
    str(angka)
    print('Data Setelah Diurutkan : ')
    if pilih == ('1'):
        urutasc(angka)
    else: 
        urutdsc(angka)
    home = input('Kembali Ke Menu Utama (Y/N)?')
else:
    back
