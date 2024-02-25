# **Laporan WPL_2024**
## **1. Basic Routing**

a.  route ’/’  <p>
![Alt text](image-1.png)<p>
b.  route ’/about’  <p>
![Alt text](image-2.png)<p>

## **2. Route Parameters**

a.  route /user/{name} <p>
![Alt text](image-3.png)<p>
b.  route /user/ tidak akan menampilkan apa-apa  <p>
![Alt text](image-4.png)<p>
c. route /posts/{post}/comments/{comment} akan menampilkan 2 parameter yaitu yang pertama parameter "pos ke-1" dan parameter kedua "komentar ke-5"<p> 
![Alt text](image-5.png)<p>
d. route /articles/{id} <p> 
![Alt text](image-6.png)<p>

## **3. Optional Parameters**

a.  Karena function ($name=null) jadi jika kita tidak mengisi parameternya program tetap akan berjalan dengan parameter null/kosong <p>
![Alt text](image-7.png)<p>
b.  Langsung menampilkan nama "john" karna kita memasukan namanya di parameter jadi kita ditakperlu mengetik parameternya lagi  <p>
![Alt text](image-8.png)<p>


## **4. Controller**

a.  di route ini kita memanggil controller "WelcomeController" dalam controller itu memanggil fungsi hallo() yang mereturn kalimat "hallo world dunia"<p>
![Alt text](image-9.png)<p>
b.  Modifikasi dalam 1 controller <p>
![Alt text](image-10.png)<p>
![(Alt text)](image-11.png)<p>
![Alt text](image-12.png)<p>
![Alt text](image-13.png)<p>
![Alt text](image-14.png)<p>
c.  Modifikasi dalam  Single Action Controller <p>
![Alt text](image-15.png)<p>
![Alt text](image-12.png)<p>
![Alt text](image-13.png)<p>
![Alt text](image-14.png)<p>

## **5. View**

a.  Membuat sebuah pemanggilan fungsi view() berisi nama saya<p>
![Alt text](image-16.png)<p>

## **6. View dalam direktori**

a. Jika file view berada di dalam direktori lain, maka kita bisa menggunakan “dot” notation untuk mereferensikan direktori tersebut<p>
![Alt text](image-17.png)<p>
![Alt text](image-18.png)<p>

## **7. Menampilkan view dari controller**

a. Menampilkan view dari controller, maka router nya diganti langsung memanggil controller yang terdapat view didalamnya<p>
![Alt text](image-19.png)<p>
![Alt text](image-20.png)<p>

## **8. Meneruskan data ke view**
a. Untuk meneruskan array data lengkap ke fungsi view, menggunakan metode "with" untuk menambahkan bagian data individual ke view. Metode with mengembalikan instance view objek sehingga kita dapat melanjutkan rangkaian metode sebelum mengembalikan tampilan <P>

![Alt text](image-21.png)<p>


----------------------------
Terima Kasih<p>
Muhammad Dayutirta Mahara | TI-2F | 2241720210 | Politeknik Negeri Malang<p>
_______________
