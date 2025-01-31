# **Business Requirements Document (BRD)**

**FitLife Wellness Center**  
**Proyek: Sistem Kebugaran dan Pemantauan Anggota**

---

## **1. Pendahuluan**

### **Tujuan Proyek:**
Membangun sistem yang dapat meningkatkan pengalaman kebugaran anggota dengan memberikan pelatihan personal, pemantauan progres yang jelas, serta melibatkan anggota dalam komunitas yang mendukung. Sistem ini akan memudahkan pengelolaan porsi latihan, data pribadi anggota, penilaian kinerja, dan klasemen.

### **Latar Belakang:**
FitLife Wellness Center ingin memberikan pendekatan kebugaran yang lebih menyeluruh dan terukur bagi anggotanya. Dengan solusi digital yang tepat, diharapkan dapat meningkatkan retensi anggota, kepuasan, dan hasil kebugaran secara lebih efektif.

---

## **2. Ruang Lingkup Proyek**

### **Fungsionalitas yang Diharapkan:**

1. **Company Profile:**
   - Menyediakan informasi tentang *FitLife Wellness Center* kepada pengguna (anggota) melalui platform.
   - Memperkenalkan visi, misi, layanan, dan fasilitas yang tersedia.

2. **Dashboard Control untuk Company Profile:**
   - Dashboard yang memberikan **akses** kepada anggota untuk memantau kemajuan mereka dalam program kebugaran.
   - Fitur utama:
     - **Statistik kemajuan** (berat badan, tingkat kebugaran, massa otot, dll.)
     - **Pengaturan jadwal latihan** dan reminder untuk latihan rutin.
     - **Ringkasan kesehatan pribadi** (BMI, VO2 Max, dll.)

3. **Porsi Latihan untuk Anggota:**
   - Sistem untuk memberikan program latihan yang **disesuaikan** dengan tujuan kebugaran dan kondisi fisik anggota (misalnya, program untuk penurunan berat badan, pemulihan cedera, peningkatan kebugaran).
   - **Fitur utama:**
     - **Penyusunan program latihan** berdasarkan tujuan dan kemampuan fisik anggota.
     - **Tracking progres** dari setiap sesi latihan untuk penyesuaian lebih lanjut.

4. **Data Personal untuk Anggota:**
   - Penyimpanan data pribadi anggota yang mencakup informasi fisik, tujuan kebugaran, jadwal latihan, dan sejarah hasil latihan.
   - **Fitur utama:**
     - **Profil pribadi anggota** yang memuat data fisik (misalnya, tinggi, berat badan, tingkat kebugaran).
     - **Riwayat latihan dan perubahan kebugaran** yang terintegrasi dengan aplikasi.
     - **Monitoring tujuan kebugaran** yang tercatat dan diukur.

5. **Klasifikasi terhadap Penilaian Anggota:**
   - Sistem untuk **menilai progres anggota** berdasarkan hasil latihan dan pencapaian kebugaran.
   - **Fitur utama:**
     - **Klasifikasi berdasarkan kemajuan**: Pemula, menengah, lanjut, berdasarkan data progres.
     - **Pemberian skor**: Anggota akan mendapatkan skor berdasarkan penurunan berat badan, peningkatan kekuatan, atau daya tahan.
     - **Laporan hasil penilaian** yang menunjukkan apakah tujuan kebugaran tercapai.

6. **Klasemen Anggota:**
   - Menyediakan **kompetisi** dan **penghargaan** antar anggota berdasarkan pencapaian kebugaran mereka.
   - **Fitur utama:**
     - **Peringkat anggota**: Anggota yang memiliki kemajuan terbaik (misalnya penurunan berat badan, peningkatan kebugaran) akan berada di peringkat teratas.
     - **Tantangan kebugaran**: Kompetisi bulanan atau tahunan untuk mencapai hasil tertentu (misalnya, jarak lari, penurunan berat badan).
     - **Pemberian penghargaan** kepada anggota yang berhasil mencapai tujuan atau menduduki peringkat tinggi.

---

## **3. Kebutuhan Fungsional**

### **Dashboard dan Pemantauan Progres:**
1. **Pemantauan Real-time**: Dashboard akan menampilkan data terkini tentang berat badan, massa otot, dan kemajuan kebugaran lainnya.
2. **Integrasi dengan Wearable Devices**: Sistem memungkinkan anggota untuk menghubungkan perangkat pelacak kebugaran seperti smartwatches atau fitness bands.
3. **Data Terukur**: Sistem dapat mengukur dan mencatat **BMI, VO2 Max, kekuatan otot, dan tingkat kebugaran jantung**.

### **Porsi Latihan:**
1. **Personalisasi Program Latihan**: Berdasarkan data awal anggota (misalnya, berat badan, tujuan kebugaran), sistem akan membuatkan program latihan yang **disesuaikan**.
2. **Pembaruan Berkala**: Program latihan akan diperbarui berdasarkan progres anggota setiap 4-6 minggu.
3. **Pengingat Jadwal Latihan**: Fitur notifikasi yang mengingatkan anggota tentang jadwal latihan yang telah diatur.

### **Data Pribadi Anggota:**
1. **Pengumpulan Data**: Setiap anggota akan mengisi data pribadi mereka yang mencakup tinggi badan, berat badan, usia, riwayat kesehatan, dan tujuan kebugaran.
2. **Keamanan Data**: Data pribadi anggota akan dilindungi dengan enkripsi dan hanya dapat diakses oleh anggota dan pelatih yang terdaftar.

### **Klasifikasi Penilaian:**
1. **Penilaian Kinerja**: Sistem akan mengklasifikasikan anggota berdasarkan hasil latihan mereka, seperti tingkat kebugaran, penurunan berat badan, atau peningkatan stamina.
2. **Pengelompokan Anggota**: Berdasarkan skor dan progres yang tercatat, anggota akan digolongkan ke dalam kategori (misalnya: Pemula, Menengah, Lanjut).

### **Klasemen Anggota:**
1. **Kompetisi Bulanan/Tahunan**: Anggota dapat berpartisipasi dalam kompetisi kebugaran, dengan tujuan untuk mencapai hasil terbaik dalam waktu yang ditentukan (misalnya, menurunkan berat badan terbanyak, meningkatkan stamina).
2. **Hadiah dan Penghargaan**: Pemenang kompetisi akan menerima penghargaan atau insentif, baik dalam bentuk hadiah fisik (misalnya, merchandise) atau penghargaan dalam aplikasi.

---

## **4. Kebutuhan Non-Fungsional**

1. **Keamanan Sistem**: Pengamanan data pribadi dan kesehatan anggota sangat penting, dengan menggunakan enkripsi dan autentikasi dua faktor.
2. **Kinerja Sistem**: Sistem harus mampu menangani beban pengguna yang besar, terutama pada saat kompetisi atau pengumpulan data latihan anggota secara bersamaan.
3. **Kompatibilitas Perangkat**: Sistem harus kompatibel dengan berbagai perangkat (misalnya, aplikasi mobile, perangkat wearable) agar mudah diakses oleh anggota.

---

## **5. Waktu dan Anggaran**

### **Timeline Proyek:**
- **Fase Perencanaan & Analisis**: 1 Bulan
- **Fase Pengembangan Sistem**: 3 Bulan
- **Fase Pengujian dan Penerapan**: 1 Bulan
- **Fase Implementasi dan Pelatihan Pengguna**: 1 Bulan

### **Anggaran Proyek:**
- **Pengembangan Aplikasi**: Rp 750.000.000
- **Infrastruktur Server dan Keamanan**: Rp 300.000.000
- **Biaya Pemasaran dan Pelatihan**: Rp 150.000.000
- **Total Anggaran**: Rp 1.200.000.000

---

## **6. Kesimpulan**

Dokumen ini memberikan gambaran mengenai kebutuhan fungsional dan non-fungsional untuk pengembangan sistem kebugaran digital yang mendukung pengalaman anggota di *FitLife Wellness Center*. Dengan solusi ini, perusahaan dapat meningkatkan retensi anggota, kepuasan, dan pencapaian tujuan kebugaran melalui pemantauan progres yang jelas, program latihan yang personal, dan klasemen berbasis hasil. 
