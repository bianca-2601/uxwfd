<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['Sports Equipment', 'Treadmill', 'treadmill.jpg', 850000, 
            'Solusi Olahraga Praktis di Rumah. Tetap bugar tanpa harus keluar rumah. Treadmill Elektrik Lipat ini dirancang untuk anda yang ingin berolahraga dengan nyaman dan efisien di rumah. Cocok untuk segala usia, baik pemula maupun yang sudah terbiasa berolahraga, dengan fitur modern yang menunjang aktivitas harian Anda.',
            'Fitur Unggulan:
            Motor Bertenaga: Mesin kuat dengan kecepatan hingga 12 km/jam, cocok untuk jalan santai, jogging, hingga lari ringan.
            Desain Lipat & Hemat Tempat: Bisa dilipat dengan mudah, ideal untuk ruang terbatas.
            Layar LED Multifungsi: Menampilkan informasi waktu, jarak tempuh, kalori terbakar, dan kecepatan secara real-time.
            12 Program Otomatis: Variasi program latihan untuk hasil yang lebih maksimal.
            Sistem Peredam Kejut: Mengurangi tekanan pada lutut dan sendi, memberikan kenyamanan saat berlari.
            Bluetooth & Speaker: Bisa terhubung dengan musik favorit untuk menemani latihan.
            Sensor Detak Jantung di Pegangan: Memantau detak jantung langsung selama berolahraga.

            Spesifikasi Produk:
            Daya motor: 1.5 HP
            Kecepatan: 1 – 12 km/jam
            Ukuran area lari: 120 x 40 cm
            Beban maksimal: 110 kg
            Dimensi: 145 x 68 x 110 cm
            Berat: 35 kg',
            'Sports Equipment, Treatment', 'New'],

            ['Sports Equipment', 'Dumbbell', 'dumbbell.jpg', 50000, 
            'Dumbbell Set ini adalah pilihan tepat untuk latihan beban di rumah. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk berbagai jenis latihan: dari angkat beban, squat, shoulder press, hingga latihan kardio.',
            'Fitur Unggulan:
            Bahan Berkualitas: Terbuat dari bahan besi padat atau dilapisi karet (pilih sesuai varian), kuat, tahan lama, dan tidak mudah berkarat.
            Pegangan Anti-Selip: Didesain ergonomis dengan grip nyaman, tidak licin saat berkeringat.
            Fleksibel & Multifungsi: Cocok untuk latihan tangan, dada, bahu, punggung, dan kaki.
            Tersedia Berbagai Berat: Mulai dari 1 kg hingga 20 kg per sisi – bisa disesuaikan dengan kebutuhan latihan.
            Pilihan Model: Tersedia model fixed (satu ukuran) atau adjustable (bisa bongkar pasang beban).
            Spesifikasi Umum:
            Bahan: Besi/besi berlapis neoprene/karet PVC
            Warna: Hitam, Abu-abu, atau Warna Ceria (tergantung varian)
            Pilihan berat: 1 kg, 2 kg, 5 kg, 10 kg, 15 kg, 20 kg
            Model: Dumbbell tetap / Dumbbell adjustable',
            'Sports Equipment', 'New'],

            ['Sports Equipment', 'Barbell', 'barbell.jpg', 100000, 
            'Barbell Set ini dirancang untuk Anda yang ingin membentuk otot secara maksimal, meningkatkan kekuatan tubuh, dan melakukan latihan beban seperti di gym profesional. Cocok digunakan untuk latihan bench press, deadlift, squat, shoulder press, dan masih banyak lagi.',   
            'Fitur Unggulan:
            Material Kuat & Tahan Lama: Batang barbell terbuat dari baja solid berkualitas tinggi, kuat menahan beban berat dan tidak mudah bengkok.
            Beragam Pilihan Berat: Tersedia set beban mulai dari 10 kg hingga 100 kg, bisa disesuaikan dengan kebutuhan dan level latihan.
            Grip Anti-Selip: Pegangan dilapisi tekstur anti-slip untuk kenyamanan dan keamanan saat digunakan.
            Kunci Pengaman: Dilengkapi pengunci beban (spinlock atau kunci klip) agar pelat tidak mudah lepas saat latihan.
            Bisa Digunakan Terpisah: Pada model tertentu, pelat barbell bisa digunakan juga sebagai dumbbell.
            Spesifikasi Produk:
            Bahan batang: Baja tahan karat
            Bahan pelat: Besi/cast iron, vinyl-coated, atau rubber-coated (tergantung varian)
            Panjang batang barbell: 120 cm – 180 cm (tergantung model)
            Berat tersedia: 10 kg, 20 kg, 30 kg, 50 kg, 80 kg, 100 kg
            Model: Barbell tetap / Barbell set adjustable',
            'Sports Equipment', 'New'],

            ['Sports Equipment', 'Resistance Band', 'resistance band.jpg', '20000', 
            'Resistance Band Set adalah solusi sempurna untuk latihan otot seluruh tubuh di rumah, gym, atau bahkan saat traveling. Ringan, mudah dibawa, namun tetap memberikan tantangan maksimal untuk berbagai level kebugaran.',    
            'Fitur Unggulan:
            Material Elastis Premium: Terbuat dari lateks alami berkualitas tinggi yang lentur, kuat, dan tahan lama.
            Beragam Tingkat Resistensi: Satu set berisi beberapa band dengan level ringan hingga berat (misalnya: 10 lbs – 50 lbs) – bisa digunakan sendiri atau dikombinasikan.
            Multifungsi: Cocok untuk latihan kekuatan, rehabilitasi cedera, yoga, pilates, stretching, hingga pembentukan otot.
            Pegangan Nyaman & Aksesori Lengkap: Dilengkapi dengan handle busa, ankle strap, dan door anchor untuk variasi latihan yang lebih luas.
            Ringan & Portabel: Mudah dibawa ke mana saja – cukup masukkan ke tas!
            Spesifikasi Produk:
            Bahan: 100% Natural Latex
            Level resistensi: 10 lbs, 20 lbs, 30 lbs, 40 lbs, 50 lbs
            Panjang band: ±120 cm (sebelum diregangkan)
            Isi paket: 5 resistance band, 2 pegangan tangan, 2 ankle strap, 1 door anchor, 1 tas penyimpanan
            Warna: Sesuai level resistensi (bervariasi)',
             'Sports Equipment', 'New'],

            ['Automotive', 'Exhaust', 'knalpot mobil.jpg', 125000, 
            'Tingkatkan performa dan tampilan mobil Anda dengan Exhaust System / Knalpot Mobil Sport. Didesain untuk menambah tenaga, memperbaiki aliran gas buang, serta memberikan suara yang lebih sporty dan agresif. Cocok untuk harian maupun penggunaan performa tinggi.',
            'Exhaust mobil ini dirancang untuk memberikan sentuhan klasik pada kendaraan Anda. Dilengkapi dengan teknologi standar yang sudah teruji, produk ini meningkatkan performa mesin dengan aliran gas buang yang lebih lancar, serta memberikan suara knalpot yang lebih autentik dan dalam. Meskipun produk bekas, kondisi dan fungsinya masih sangat baik, cocok untuk Anda yang ingin menjaga orisinalitas kendaraan atau memulihkan sistem knalpot mobil klasik ke kondisi semula.
            Spesifikasi Umum:
            Bahan: Stainless Steel 304 
            Model: Axle back, muffler, resonator, full system
            Diameter pipa: 22.5
            Finishing: Polished, Burnt Tip
            Suara:racing sound ',
            'Automotive, Cars', 'Used'],

            ['Automotive', 'Car Tape', 'tape.jpg', 75000, 
            'Ubah suasana kabin mobil jadi lebih hidup dengan Car Tape / Head Unit Mobil Modern. Dilengkapi dengan fitur lengkap dan konektivitas canggih, car tape ini cocok untuk Anda yang ingin menikmati musik, video, dan navigasi selama perjalanan, baik harian maupun saat mudik.',
            'Tape mobil model lama dengan sistem manual. Masih berfungsi normal untuk memutar kaset dan radio FM/AM. Cocok untuk koleksi atau pengguna mobil klasik yang ingin mempertahankan nuansa retro di interiornya.
            Detail Produk:

            Model: Manual (non-digital)
            Fungsi: Radio FM/AM, pemutar kaset
            Kondisi: Bekas, berfungsi
            Kompatibel: Mobil model lama (dengan slot tape standar)

            Cocok untuk: Penggemar mobil klasik atau kebutuhan restorasi interior original.',
            'Automotive, Cars', 'Used'],

            ['Automotive', 'Car Audio', 'audio-mobil.png', 400000, 
            'Nikmati pengalaman berkendara yang lebih seru dengan Audio Mobil Premium. Didesain khusus untuk pecinta musik dan kualitas suara, sistem audio ini menghadirkan dentuman bass yang dalam, suara vokal yang jernih, dan detail nada yang tajam – cocok untuk semua jenis kendaraan, dari city car hingga SUV.',
            'Sistem audio mobil bergaya klasik dengan pemutar kaset manual dan radio AM/FM. Cocok untuk pecinta mobil retro atau restorasi kendaraan klasik. Dilengkapi kontrol analog yang memberi kesan nostalgia saat berkendara.

            Detail Produk:
            Tipe: Tape manual (non-digital)
            Fitur: Pemutar kaset, radio AM/FM
            Kontrol: Tombol dan knob manual
            Kondisi: Bekas, masih berfungsi
            Kompatibel: Slot head unit mobil standar (DIN)

            Cocok untuk: Restorasi mobil klasik, kolektor audio jadul, atau pengguna yang ingin nuansa retro.',
            'Automotive, Cars', 'Used'],

            ['Automotive', 'Wheel Rim', 'velg.jpeg', 105000, 
            'Upgrade gaya dan performa mobil Anda dengan Velg Mobil Sport Berkualitas Tinggi. Dirancang dengan presisi dan bahan pilihan, velg ini tidak hanya memberikan tampilan yang lebih keren dan elegan, tapi juga meningkatkan kestabilan dan kenyamanan berkendara.',
            'Pelek mobil bergaya sporty dengan warna dasar silver elegan dan detail lingkaran luar berwarna hitam. Dibuat dari material alloy berkualitas tinggi yang ringan namun kuat, memberikan tampilan modernsekaligus meningkatkan performa kendaraan. Cocok untuk berbagai jenis mobil harian maupun modifikasi.

            Detail Produk:
            Ukuran: 16 inch
            Warna: Silver dengan aksen hitam di bagian pinggir
            Bahan: Aluminium alloy
            PCD: 5 x 114.3 mm
            Lebar pelek: 7 inch
            Offset (ET): +35 
            Kondisi: Bekas layak pakai 

            Cocok untuk: Mobil sedan, hatchback, atau SUV ringan.',
            'Automotive, Cars', 'Used'],

            ['Gaming', 'Gaming Keyboard', 'keyboard gaming.jpg', 75000, 
            'Tingkatkan performa bermain game Anda dengan Gaming Keyboard Mekanikal yang dirancang khusus untuk gamer sejati. Dengan switch responsif, pencahayaan RGB yang atraktif, dan build quality yang kokoh, keyboard ini menjadi senjata utama untuk semua genre game, dari FPS hingga MOBA.',
            'Temukan pengalaman bermain game yang lebih seru dengan keyboard gaming bergaya klasik ini. Dilengkapi dengan tombol mekanik yang responsif dan tahan lama, keyboard ini menawarkan kenyamanan dan presisi yang dibutuhkan oleh para gamer sejati. Desainnya yang retro dengan sentuhan modern memberikan nuansa klasik yang tetap relevan dengan kebutuhan gaming masa kini. Cocok untuk para penggemar keyboard mekanik atau mereka yang ingin membawa kesan vintage ke dalam setup gaming mereka.

            Detail Produk:
            Tipe: Keyboard mekanik dengan tombol analog
            Fitur: Tombol responsif, pencahayaan RGB, dan anti-ghosting
            Kontrol: Tombol dan switch mekanik untuk kecepatan dan akurasi tinggi
            Kondisi: Baru, siap digunakan
            Kompatibel: Sistem operasi Windows, macOS, dan perangkat gaming lainnya

            Cocok untuk: Gamer yang mencari keyboard dengan performa tinggi dan tampilan klasik, serta kolektor yang menghargai desain retro dan fungsionalitas.',
            'Gaming, Keyboard', 'New'],

            ['Gaming', 'Gaming Mouse', 'gaming mouse.jpg', 45000, 
            'Rasakan kontrol maksimal dan kenyamanan saat bermain dengan Gaming Mouse yang dirancang khusus untuk performa terbaik. Dengan sensor presisi tinggi, desain ergonomis, dan pencahayaan RGB yang keren, mouse ini siap menemani Anda dari sesi game kasual hingga turnamen kompetitif.',
            'Rasakan pengalaman bermain game yang lebih optimal dengan gaming mouse ini, dirancang untuk memberikan kenyamanan maksimal dan presisi luar biasa. Dengan desain ergonomis yang cocok untuk tangan, mouse ini memudahkan gerakan cepat dan presisi saat bermain game kompetitif. Dilengkapi dengan sensor optik canggih dan tombol yang responsif, gaming mouse ini membantu Anda meraih kemenangan dengan akurasi tinggi dan kecepatan yang tidak tertandingi.

            Detail Produk:
            Tipe: Gaming Mouse dengan sensor optik
            Fitur: DPI tinggi, tombol makro, pencahayaan RGB
            Kontrol: Tombol yang dapat diprogram dan pengaturan sensitivitas yang mudah
            Kondisi: Baru, siap digunakan
            Kompatibel: Windows, macOS, dan konsol gaming

            Cocok untuk: Gamer yang membutuhkan mouse dengan performa tinggi untuk bermain game genre FPS, MOBA, atau RTS, serta mereka yang mencari perangkat dengan desain ergonomis dan fitur canggih.',
            'Gaming, Mouse', 'New'],

            ['Gaming', 'Nintendo Switch', 'Nintendo Switch ori.jpeg', 1500000, 
            'Main game di mana saja, kapan saja! Nintendo Switch adalah konsol revolusioner yang bisa dimainkan dalam tiga mode: handheld, tabletop, dan TV. Baik sendiri maupun bersama teman dan keluarga, Nintendo Switch menawarkan pengalaman bermain yang seru, praktis, dan penuh warna.',
            'Nikmati pengalaman gaming yang fleksibel dan seru dengan Nintendo Switch. Dengan desain inovatif yang memungkinkan Anda bermain di rumah atau saat bepergian, konsol ini memberikan kebebasan bermain kapan saja dan di mana saja. Dapatkan pengalaman bermain game konsol terbaik dengan layar sentuh 6,2 inci yang jernih, serta kontrol Joy-Con yang dapat dilepas dan digunakan dalam berbagai mode.

            Detail Produk:
            Tipe: Nintendo Switch v1 (model pertama)
            Fitur: Mode TV, mode handheld, dan mode tabletop
            Kondisi: Bekas, berfungsi dengan baik
            Layar: 6,2 inci, resolusi 1280x720
            Daya Tahan Baterai: Hingga 6 jam (tergantung penggunaan)
            Kontrol: Joy-Con terpisah, dapat digunakan secara individual atau digabungkan

            Cocok untuk: Penggemar Nintendo, kolektor konsol retro, atau siapa saja yang ingin merasakan pengalaman gaming portabel dengan kualitas konsol.',
            'Gaming', 'Used'],

            ['Gaming', 'Nintendo Switch Lite', 'nintendo switch lite.jpeg', 1000000, 
            'Nikmati pengalaman bermain game Nintendo favorit Anda dengan Nintendo Switch Lite. Dirancang khusus untuk mode handheld, Switch Lite adalah pilihan sempurna bagi gamer yang menginginkan konsol portabel dengan harga lebih terjangkau tanpa mengorbankan kualitas.',
            'Rasakan pengalaman bermain game Nintendo yang menyenangkan kapan saja dan di mana saja dengan Nintendo Switch Lite. Didesain khusus untuk mode handheld, Switch Lite memberikan kenyamanan maksimal dengan ukuran yang lebih kecil dan lebih ringan, ideal untuk dibawa bepergian. Dengan kontrol built-in dan layar sentuh 5,5 inci yang tajam, konsol ini menawarkan akses mudah ke ribuan game dari Nintendo eShop, sehingga Anda bisa menikmati hiburan tanpa batas.

            Detail Produk:
            Tipe: Nintendo Switch Lite (model portabel)
            Fitur: Mode handheld, kontrol built-in, kompatibel dengan game Nintendo Switch
            Kondisi: Bekas, berfungsi normal
            Layar: 5,5 inci, resolusi 1280x720
            Daya Tahan Baterai: Hingga 7 jam (tergantung penggunaan)
            Kontrol: Tombol fisik built-in, tanpa Joy-Con terpisah

            Cocok untuk: Penggemar Nintendo yang mencari konsol portabel dengan harga terjangkau, kolektor konsol Nintendo, atau siapa saja yang ingin bermain game Switch di luar rumah dengan lebih praktis.',
             'Gaming', 'Used'],

            ['Kitchen Items', 'Saucepan', 'saucepan.jpeg', 20000, 
            'Nikmati pengalaman memasak yang lebih praktis dengan Saucepan. Dengan desain yang kompak dan fungsional, saucepan ini sangat ideal untuk membuat saus, merebus sup, memasak nasi, atau memanaskan makanan dalam porsi kecil. Terbuat dari bahan berkualitas tinggi, saucepan ini memastikan masakan Anda matang merata dan cepat.',
            'Raih hasil masakan yang sempurna setiap kali dengan saucepan premium ini. Dirancang untuk memasak saus, sup, atau merebus bahan dengan mudah, saucepan ini hadir dengan desain praktis dan material yang tahan lama. Dilengkapi dengan pegangan ergonomis dan tutup yang rapat, memastikan proses memasak Anda lebih nyaman dan aman. Dengan kapasitas ideal dan distribusi panas yang merata, saucepan ini cocok untuk berbagai kebutuhan dapur.

            Spesifikasi Umum:
            Bahan: Stainless steel
            Ukuran: 1L
            Handle: Pegangan ergonomis tahan panas
            Kompatibilitas: Kompor gas, kompor induksi, kompor listrik
            Perawatan: Mudah dibersihkan, sebagian model bisa dicuci dengan mesin cuci piring


            Cocok untuk: Keluarga yang sering memasak hidangan berkuah, penggemar masakan rumahan, atau siapa saja yang membutuhkan peralatan dapur serbaguna dan tahan lama.',
             'Kitchen, Cook', 'New'],

            ['Kitchen Items', 'Skillet', 'pan.jpg', 50000, 
            'Dapatkan hasil masakan yang sempurna dengan wajan yang dirancang untuk memasak dengan lebih praktis dan efisien. Terbuat dari bahan berkualitas tinggi, skillet ini cocok untuk berbagai teknik memasak seperti menggoreng, menumis, memanggang, atau membuat hidangan khas seperti steak dan telur dadar.',
            'Nikmati pengalaman memasak yang lebih praktis dan menyenangkan dengan skillet berkualitas tinggi ini. Didesain untuk memberikan distribusi panas yang merata, skillet ini ideal untuk menumis, menggoreng, atau memanggang berbagai hidangan. Dengan permukaan anti lengket dan pegangan ergonomis, memasak menjadi lebih mudah dan hasilnya selalu sempurna. Dapat digunakan di kompor gas, induksi, atau oven, menjadikannya pilihan serbaguna untuk dapur Anda.

            Spesifikasi Umum:
            Bahan: Cast iron 
            Ukuran: 28cm
            Pegangan: Handle ergonomis atau dengan pegangan tambahan untuk kenyamanan
            Kompatibilitas: Kompor gas, kompor induksi, oven 
            Perawatan: Mudah dibersihkan, sebagian model bisa dicuci dengan mesin cuci piring

            Cocok untuk: Penggemar masakan rumahan, keluarga, atau siapa saja yang ingin memasak dengan wajan',
            'Kitchen, Cook', 'New'],

            ['Kitchen Items', 'Microwave', 'Microwave.jpg', 250000, 
            'Dapatkan kenyamanan memasak dengan Microwave yang dirancang untuk memudahkan kegiatan dapur Anda. Dengan teknologi canggih dan desain yang kompak, microwave ini akan membantu Anda memanaskan, memasak, atau mencairkan makanan dengan cepat dan merata, tanpa repot.',
            'Nikmati kemudahan memasak dan memanaskan makanan dengan microwave yang dirancang untuk memenuhi kebutuhan dapur modern Anda. Dengan teknologi pemanasan cepat dan merata, microwave ini memungkinkan Anda untuk memanaskan makanan, mencairkan bahan makanan beku, atau bahkan memasak hidangan favorit dengan waktu yang lebih singkat. Desain kompak dan stylish membuatnya cocok untuk berbagai jenis dapur, baik yang kecil maupun besar.

            Spesifikasi Umum:
            Kapasitas:  30L 
            Daya: 700W – 1000W
            Pengaturan waktu: Hingga 30 menit
            Fitur tambahan: Defrost, auto-cook, tombol cepat, pengaturan suhu
            Material: Stainless steel atau plastik berkualitas tinggi
            Panel kontrol:  digital

            Cocok untuk: Keluarga sibuk, individu yang sering makan di luar atau mereka yang membutuhkan cara cepat untuk memanaskan makanan dengan efisien.',
            'Kitchen, Cook', 'New'],

            ['Kitchen Items', 'Oven', 'Oven.jpeg', 500000, 
            'Nikmati kemudahan dalam memasak dengan Oven Multifungsi yang dirancang untuk memenuhi semua kebutuhan dapur Anda. Dengan berbagai fitur canggih dan kapasitas besar, oven ini memungkinkan Anda memanggang, membakar, dan memasak berbagai jenis makanan dengan hasil yang sempurna setiap saat.',
            'Dapatkan kemudahan dalam memanggang, menghangatkan, atau memasak berbagai hidangan lezat dengan oven multifungsi ini. Dirancang untuk memenuhi kebutuhan dapur modern, oven ini menawarkan ruang yang cukup luas dan fitur canggih untuk memastikan hasil masakan yang sempurna setiap kali. Dengan kontrol suhu yang akurat dan desain yang elegan, oven ini tidak hanya menjadi alat memasak yang efisien, tetapi juga menambah estetika dapur Anda.

            Spesifikasi Umum:
            Kapasitas: 30L
            Pengaturan suhu: 100°C – 250°C
            Timer: 30 menit – 120 menit
            Fitur tambahan: Fungsi pemanggang (grill), pemanggang roti, atau rotisserie
            Bahan: Stainless steel atau pelapis anti lengket
            Aksesori: Rak oven, loyang, dan pemanggang roti
            Konektivitas: Sistem pemanas konvensional atau pemanas berbasis elemen halogen 
            Cocok untuk: Keluarga yang ingin menambah kepraktisan memasak di rumah, penggemar baking, atau siapa saja yang ingin memiliki oven serbaguna dengan desain modern.',
            'Kitchen, Cook', 'New'],

            ['Carpentry', 'Hammer', 'pali.jpg', 10000, 
            'Palu berkualitas tinggi dengan pegangan yang kokoh dan nyaman digenggam. Kepala palu terbuat dari bahan yang tahan lama dan kuat, siap menghadapi berbagai jenis permukaan.
            Size
            1000 gram (1Kg)',
            ' ',
            'Carpentry, Items', 'New'],

            ['Carpentry', 'Hand Drill', 'bor.jpg', 30000, 
            'Hand drill berkualitas tinggi, dirancang untuk memberikan kemudahan dan presisi saat melakukan pengeboran pada berbagai bahan seperti kayu, logam, atau plastik. Dilengkapi dengan pegangan ergonomis untuk kenyamanan maksimal
            Size
            Panjang Hand Drill : 20 cm
            Diameter Mata Bor : 1-10 mm
            Torsi : 20 Nm',
            'Fitur Unggulan:
            Motor Kuat dan Performa Maksimal – Dilengkapi dengan motor yang tangguh, hand drill ini mampu mengebor berbagai material seperti kayu, plastik, atau logam dengan mudah dan cepat.
            Desain Ergonomis – Pegangan yang nyaman dan ringan memudahkan pengoperasian alat ini dalam jangka waktu lama tanpa menyebabkan kelelahan pada tangan.
            Pengaturan Kecepatan Variabel – Fitur pengaturan kecepatan memungkinkan Anda menyesuaikan kecepatan bor sesuai dengan kebutuhan material yang sedang dikerjakan.
            Daya Tahan Tinggi – Dibuat dengan material berkualitas untuk daya tahan yang lebih lama, hand drill ini dapat diandalkan untuk berbagai proyek.
            Spesifikasi Umum:
            Tipe: Hand drill listrik
            Kecepatan: Variabel, disesuaikan dengan kebutuhan
            Power: 500W
            Chuck: 10mm atau sesuai dengan tipe mata bor
            Bahan: Rangka yang kokoh dan tahan lama
            Fitur Tambahan: Pegangan antiselip untuk kenyamanan tambahan ',
            'Carpentry, Items', 'New'],

            ['Carpentry', 'Nails', 'baut.jpg', 10000, 
            'Paku berkualitas tinggi. Terbuat dari logam tahan karat, paku ini cocok untuk berbagai kebutuhan, mulai dari perbaikan rumah hingga proyek konstruksi. Dilengkapi dengan ujung tajam dan kepala paku yang rata untuk hasil pekerjaan yang rapi dan presisi.',
            ' ',
            'Carpentry, Items', 'New'],

            ['Books', 'The Art of Being Alone', 'alone.jpg', 35000, 
            'Berisi kisah, refleksi, dan panduan praktis untuk merangkul momen-momen sendiri, tanpa merasa sepi atau kehilangan arah. Dilengkapi dengan tulisan yang  menyentuh, buku ini cocok untuk siapa saja yang ingin lebih mengenal diri, membangun kepercayaan diri, dan menikmati waktu sendiri dengan damai.',
            ' ',
            'Books, Non-Fiction', 'New'],

            ['Books', 'Atomic Habits', 'atomic.jpg', 25000, 
            'Atomic Habits berisi panduan praktis, strategi ilmiah, dan inspirasi nyata tentang bagaimana mengubah kebiasaan buruk menjadi kebiasaan baik secara bertahap. Bahasa yang mudah dipahami dan contoh-contoh aplikatif, buku ini siap membantu Anda meraih tujuan tanpa tekanan besar.',
            ' ',
            'Books, Non-Fiction', 'New'],

            ['Books', 'Seni Hidup Minimalis', 'seni.jpg', 15000, 
            'Berisi panduan praktis, filosofi minimalisme, serta tips menata ruang dan pikiran agar lebih tenang dan fokus. Dilengkapi dengan desain tata letak yang nyaman dibaca dan isi yang relevan untuk berbagai kalangan yang ingin memulai gaya hidup minimalis.',
            ' ',
            'Books, Non-Fiction', 'New'],

            ['Music Essentials', 'Acoustic Guitar', 'gitar.jpg', 350000, 
            'Temukan kualitas suara yang kaya dan resonan dengan Gitar Akustik yang dirancang untuk memberikan kenyamanan dan performa terbaik saat dimainkan. Cocok untuk berbagai gaya bermain, mulai dari strumming santai hingga fingerstyle yang lebih teknikal.',
            'Fitur Unggulan:
            Bodi Nyaman dan Ringan – Desain ergonomis dengan lekukan yang pas di tubuh, membuat gitar ini nyaman dimainkan dalam waktu lama.
            Material Berkualitas – Terbuat dari kayu pilihan seperti spruce, mahogany, atau basswood yang menghasilkan suara hangat dan natural.
            Fretboard Halus – Dengan finishing yang rapi dan leher gitar yang presisi, memudahkan pergerakan jari dan membuat permainan lebih akurat.
            Tuning Stabil – Dilengkapi dengan tuning peg berkualitas tinggi yang menjaga nada tetap stabil dan mudah disetel.
            Desain Elegan – Finishing glossy atau doff dengan berbagai pilihan warna klasik dan modern yang cocok untuk semua selera.
            Spesifikasi Umum:
            Tipe: Gitar akustik 
            Bahan body: Mahogany
            Panjang: 40 inci
            Fret: 20 fret
            Warna: Putih ',
            'Music, Instruments', 'New'],

            ['Music Essentials', 'Violin', 'biola.jpg', 450000, 
            'Mulailah perjalanan musikal Anda dengan Biola Berkualitas yang dirancang untuk menghasilkan suara jernih dan harmonis. Cocok untuk latihan, pertunjukan, atau pembelajaran, biola ini hadir dengan bahan pilihan dan build yang presisi untuk mendukung kenyamanan dan performa maksimal.',
            'Fitur Unggulan:
            Material Kayu Pilihan – Terbuat dari kombinasi kayu spruce (top), maple (back & sides), dan ebony (fingerboard) untuk menghasilkan resonansi suara yang optimal.
            Build Presisi & Tahan Lama – Konstruksi biola yang kokoh dan detail finishing halus, memberikan kenyamanan saat dimainkan dan daya tahan jangka panjang.
            Suara Lembut & Stabil – Dirancang untuk memberikan suara yang seimbang, cocok untuk latihan harian maupun penampilan formal.
            Mudah Disetel & Dimainkan – Dilengkapi dengan fine tuner dan peg tuning yang responsif, membuat proses penyetelan lebih mudah bahkan untuk pemula.
            Paket Lengkap Siap Pakai – Biola dikemas lengkap dengan aksesoris penting, siap digunakan tanpa perlu beli tambahan.
            Spesifikasi Umum:
            Ukuran: 1/4, 1/2, 3/4, 4/4 (pilih sesuai usia dan tinggi pemain)
            Material: Spruce top, maple back & sides, ebony fingerboard 
            Warna: Natural, coklat tua, hitam, klasik varnish
            Aksesoris: Bow , tas softcase, shoulder rest
            Cocok untuk: Siswa sekolah musik, pemula, intermediate, dan pemain orkestra',
            'Music, Instruments', 'New'],

            ['Music Essentials', 'Keyboard', 'Keyboard.jpg', 950000, 
            'Buat musik jadi lebih menyenangkan dengan Keyboard Musik Elektrik yang praktis dan lengkap. Cocok untuk pemula, pelajar, hingga musisi yang ingin berlatih atau menciptakan musik sendiri di rumah. Dilengkapi berbagai fitur modern dan suara instrumen realistis, keyboard ini siap jadi teman latihan dan hiburan.',
            'Fitur Unggulan:
            Beragam Suara & Irama – Tersedia ratusan pilihan suara instrumen (tone), ritme (rhythm), dan demo lagu untuk eksplorasi musik lebih luas.
            Tuts Responsif & Nyaman – Jumlah tuts 61, dengan feel yang nyaman untuk belajar maupun bermain profesional.
            Port Koneksi Lengkap – Dilengkapi jack headphone, mic input, USB MIDI, dan adaptor listrik untuk koneksi mudah ke komputer atau speaker eksternal.
            Layar LCD & Panel Digital – Memudahkan navigasi menu, pemilihan suara, tempo, dan mode permainan
            Spesifikasi Umum:
            Jumlah tuts: 61
            Suara instrumen: 100–500+ tone
            Irama: 100–300 rhythm + demo lagu
            Fitur tambahan: Sustain, vibrato, transpose, recording, lesson mode
            Koneksi: USB, jack audio, adaptor listrik
            Power: Adaptor
            Cocok untuk: Pelajar musik, pemula, guru les, musisi rumahan, dan siapa saja yang ingin mulai bermain',
            'Music, Instruments', 'New'],

            ['Gadgets', 'Iphone 11', 'iphone 11.jpg', 2050000, 
            'Dengan kamera ganda 12 MP, Anda bisa menangkap foto dan video yang tajam, terang, dan penuh detail. Layar Liquid Retina HD memberikan tampilan warna yang cerah dan jernih, sementara desainnya yang stylish dan tahan lama memastikan pengalaman penggunaan yang maksimal.',
            'Fitur Unggulan:
            Layar Liquid Retina 6.1 Inci – Menampilkan warna akurat dan detail tajam, nyaman untuk menonton, membaca, dan bermain game.
            Kamera Ganda 12MP – Kamera utama + ultra wide dengan kualitas foto dan video yang jernih, lengkap dengan Night Mode dan kemampuan perekaman 4K.
            Chip A13 Bionic – Prosesor cepat dan efisien yang masih sangat mumpuni untuk multitasking, gaming, dan aplikasi berat di 2025.
            Face ID & iOS Terbaru – Keamanan biometrik cepat dan kompatibel dengan pembaruan iOS hingga beberapa tahun ke depan.
            Spesifikasi Umum:
            Layar: 6.1 inci Liquid Retina HD
            Chipset: A13 Bionic
            Kamera: Dual kamera 12MP (wide + ultra wide), kamera depan 12MP
            Video: Rekam hingga 4K 60fps
            Baterai: Tahan seharian, fast charging & wireless charging
            Penyimpanan: 64GB 
            Warna: White
            Sistem Operasi: iOS (upgradable)',
            'Gadgets, Original', 'New'],

            ['Gadgets', 'Samsung Pink S23', 's23.jpg', 3000000, 
            'Tampil beda dan penuh gaya dengan Samsung Galaxy S23 warna Pink, smartphone flagship yang menggabungkan kekuatan, kecanggihan, dan desain memikat. Dengan performa tinggi dan kamera profesional, Galaxy S23 siap mendukung semua aktivitas harian Anda—dari pekerjaan, hiburan, hingga konten kreatif—dalam satu genggaman yang stylish.',
            'Fitur Unggulan:
            Desain Premium & Warna Pink Eksklusif – Bodi ramping dengan material kaca dan aluminium, dipadukan dengan warna pink lembut yang feminin namun tetap elegan.
            Kamera Profesional 50MP – Hasilkan foto dan video jernih, bahkan dalam kondisi minim cahaya, berkat kamera utama 50MP, ultra-wide, dan telephoto.
            Performa Super Cepat – Didukung Snapdragon 8 Gen 2 for Galaxy, khusus disesuaikan untuk performa maksimal dan efisiensi daya yang lebih baik.
            Daya Tahan & Pengisian Cepat – Baterai 3.900mAh yang tahan seharian dengan fitur fast charging dan wireless charging.
            Spesifikasi Umum:
            Layar: 6.1 inci Dynamic AMOLED 2X, FHD+, 120Hz
            Chipset: Snapdragon 8 Gen 2 for Galaxy
            Kamera: 50MP (utama) + 12MP (ultrawide) + 10MP (telephoto), kamera depan 12MP
            Baterai: 3.900 mAh, fast charging 25W
            Penyimpanan: 128GB / 256GB
            RAM: 8GB
            Warna: Pink
            OS: Android 13 (One UI 5.1, upgradable)',
            'Gadgets, Original', 'New'],

            ['Gadgets', 'Iphone 15', 'ip15p.jpg', 5000000, 
            'Rasakan pengalaman premium dengan iPhone 15, generasi terbaru dari Apple yang hadir dengan desain elegan, kamera canggih, dan performa super cepat. Dengan chip A16 Bionic dan fitur Dynamic Island, iPhone 15 menjadi perpaduan sempurna antara gaya dan teknologi mutakhir.',
            'Fitur Unggulan:
            Dynamic Island – Notch interaktif yang menampilkan notifikasi, panggilan, musik, dan lainnya secara real-time dengan cara yang inovatif dan intuitif.
            Layar Super Retina XDR 6.1 inci – Tampil dengan kecerahan tinggi, warna akurat, dan detail tajam yang memukau untuk segala aktivitas.
            Kamera Ganda 48MP – Kamera utama ultra-jernih dengan kemampuan fotografi dan video luar biasa, termasuk mode potret baru dan zoom optik 2x.
            Chip A16 Bionic – Prosesor super cepat untuk multitasking, gaming, dan efisiensi daya yang lebih baik dibanding generasi sebelumnya.
            Port USB-C – Kini hadir dengan port USB-C untuk pengisian daya dan transfer data yang lebih cepat dan universal.
            Spesifikasi Umum:
            Layar: 6.1 inci OLED Super Retina XDR
            Chipset: A16 Bionic
            Kamera: Dual camera 48MP + 12MP, kamera depan 12MP
            Port: USB-C
            Penyimpanan: 512GB
            Sistem Operasi: iOS 17',
            'Gadgets, Original', 'New'],

            ['Woman Clothing & Accessories', 'Flower Dress', 'dress.jpg', 75000, 
            'Dress berbahan canvas berwarna broken white yang dihias dengan rajutan berbentuk bunga yang elegan dan memberikan kesan vintage yang feminim.
            Size
            L
            LD : 90-100
            LL : 40-50
            Length : 140cm',
            'Tampil anggun dan feminin dengan flower dress yang memukau ini. Didesain dengan motif bunga yang lembut dan warna-warna cerah, dress ini cocok dikenakan untuk berbagai kesempatan, mulai dari acara santai, pesta kebun, hingga makan malam romantis. Terbuat dari bahan berkualitas tinggi yang ringan dan adem di kulit, flower dress ini memberikan kenyamanan maksimal sepanjang hari.

            Model:
            Motif Bunga yang Menawan: Menampilkan kesan ceria, anggun, dan feminin dalam setiap detailnya
            Material Premium: Terbuat dari bahan halus, ringan, dan breathable, nyaman dipakai seharian
            Potongan Flowy: Memberikan siluet ramping dan jatuh cantik saat dikenakan
            Desain Lengan & Kerah Variatif: Tersedia dalam pilihan lengan pendek, panjang, hingga model tanpa lengan, dengan potongan kerah bulat atau v-neck
            Ritsleting Tersembunyi/Elastic Waist: Memudahkan saat dipakai dan menambah kenyamanan

            Cocok untuk:
            Acara santai, hangout, atau brunch bersama teman
            Pesta kebun, garden party, atau acara outdoor
            Momen spesial seperti kencan atau pemotretan kasual',
            'Woman, Dress', 'New'],

            ['Woman Clothing & Accessories', 'Flowy Blouse', 'shirt.jpg', 30000, 
            'Blouse berwarna beige berbahan katun dengan lengan berbentuk flowy dengan kancing yang memberikan kesan elegan dan feminim.
            Size
            L
            LD : 90-100
            LL : 40-50
            Length : 65cm',
            'Tampil chic dan effortless dengan flowy blouse yang elegan ini. Didesain dengan potongan longgar yang jatuh lembut mengikuti lekuk tubuh, blouse ini memberikan kesan anggun sekaligus nyaman saat dikenakan. Terbuat dari material ringan dan breathable, flowy blouse ini cocok untuk berbagai suasana, mulai dari acara santai hingga semi-formal.

            Cocok untuk:
            Outfit kantor, hangout, atau casual chic look
            Acara semi-formal atau makan malam santai
            Padu padan daily look yang tetap stylish

            Model:
            Desain Flowy yang Anggun: Potongan longgar dengan siluet jatuh cantik memberikan tampilan feminin dan elegan
            Material Premium: Menggunakan kain ringan, halus, dan sejuk di kulit, ideal untuk dipakai seharian
            Detail Stylish: Dilengkapi dengan aksen ruffle, kerah pita, atau lengan balon (optional sesuai model) untuk sentuhan ekstra manis
            Mudah Dipadupadankan: Cocok dipadukan dengan jeans, celana kain, atau rok untuk berbagai gaya
            Pilihan Warna Soft & Bold: Tersedia dalam pilihan warna pastel hingga warna bold yang menawan',
            'Woman, Blouse', 'New'],

            ['Woman Clothing & Accessories', 'Blue Shirt', 'kemeja.jpg', 25000, 
            'Kemeja berwarna biru muda berbahan katun yang cocok untuk tampilan sehari-hari yang formal namun tetap casual dan sopan. Lengan panjang yang bisa dilipat untuk tampilan lebih casual.
            Size
            L
            LD : 90-100
            LL : 40-50
            Length : 65cm',
            'Tampil clean dan stylish dengan blue shirt serbaguna ini. Didesain dengan potongan rapi dan warna biru yang elegan, kemeja ini cocok untuk berbagai suasana — mulai dari outfit kantor, acara formal, hingga santai. Terbuat dari material berkualitas yang lembut, breathable, dan nyaman dipakai seharian.

            Model:
            Warna Biru Elegan: Memberikan kesan bersih, segar, dan mudah dipadukan dengan berbagai fashion item
            Material Premium: Kain halus, ringan, dan adem di kulit, nyaman untuk aktivitas seharian
            Potongan Rapi: Desain slim fit/regular fit (optional sesuai model) yang pas di badan, memberi tampilan maskulin & modern
            Detail Kancing Depan & Kerah Klasik: Sentuhan simple namun tetap stylish
            Mudah Dipadupadankan: Cocok dipadukan dengan celana jeans, chino, atau formal pants

            Cocok untuk:
            Busana kantor, meeting, atau casual look
            Outfit semi-formal atau hangout santai
            Pilihan wardrobe basic yang wajib dimiliki',
            'Woman, Shirt', 'New'],

            ['Woman Clothing & Accessories', 'Leather Jacket', 'jacket.jpg', 150000, 
            'Leather jacket elegan dengan sentuhan modern. Terbuat dari material pilihan, memberikan kenyamanan maksimal dan tampilan eksklusif untuk Anda yang berkarakter.
            Size
            L
            LD : 94-100
            LL : 40-50
            Length : 65cm',
            'Tambahkan sentuhan keren dan maskulin pada gaya Anda dengan leather brown jacket premium ini. Didesain dengan material kulit sintetis/ori (optional sesuai stok) berkualitas, jaket ini menawarkan tampilan gagah sekaligus kenyamanan maksimal. Warna cokelat klasiknya memberikan kesan vintage modern yang mudah dipadukan untuk berbagai gaya.

            Model:
            Material Kulit Berkualitas: Tahan lama, lembut, dan nyaman dipakai, dengan finishing halus
            Warna Cokelat Klasik: Memberi kesan keren, maskulin, dan tetap elegan di segala suasana
            Desain Modern Fit: Potongan pas di badan tanpa mengurangi ruang gerak
            Detail Stylish: Dilengkapi dengan resleting depan, saku samping, dan kerah stand up atau lapel (optional sesuai model)
            Inner Lembut & Nyaman: Bagian dalam dilapisi kain halus untuk kenyamanan ekstra

            Cocok untuk:
            Outfit harian, riding, atau hangout santai
            Acara semi-formal, konser, atau gathering outdoor
            Fashion statement bagi pecinta gaya edgy & klasik',
            'Woman, Jacket', 'New'],

            ['Man Clothing & Accessories', 'Zip Sweater', 'sweater.jpg', 75000, 
            'Zip sweater coklat dengan desain simpel dan potongan modern. Warna earthy tone yang bikin penampilan lebih maskulin dan casual.
            Size
            L
            LD : 100-106
            LL : 40-44
            Length : 68cm',
            'Tetap hangat dan stylish dengan sweater zip pria ini. Terbuat dari bahan katun fleece berkualitas yang lembut dan nyaman dipakai seharian. Dilengkapi dengan resleting depan zip yang praktis.

            Detail Produk:
            Ukuran: L (Lingkar dada 100–106 cm)
            Warna: Coklat
            Bahan: Cotton fleece / baby terry

            Cocok untuk: Aktivitas santai, hangout, atau jalan-jalan saat cuaca sejuk.',
            'Man, Sweater', 'New'],

            ['Man Clothing & Accessories', 'Grey T-Shirt', 'tshirtman.jpg', 25000, 
            'Kaos basic warna abu-abu dengan potongan regular fit. Mudah dipadukan, cocok untuk gaya santai sampai semi-formal.
            Size
            XL
            LD : 114-120
            LL : 40-44
            Length : 68cm',
            'Kaos simpel dengan sentuhan fungsional. Terbuat dari bahan katun lembut yang dingin dan nyaman dipakai sehari-hari. Dilengkapi dengan saku kecil di sisi kiri dada yang menambah kesan kasual dan stylish. Potongan regular fit cocok untuk berbagai aktivitas santai.

            Detail Produk:
            Warna: Abu-abu
            Ukuran: XL
            Bahan: 100% katun
            Model: Lengan pendek, kerah bulat
            Fitur: Saku kiri dada

            Cocok untuk: Outfit harian, hangout, atau dipadukan dengan outer/jaket favoritmu.',
            'Man, T-Shirt', 'New'],

            ['Man Clothing & Accessories', 'Black Jeans', 'jeansman.jpg', 100000, 
            'Celana jeans hitam pria dengan potongan slim fit yang nyaman dipakai seharian. Cocok untuk gaya santai hingga semi-formal.
            Size
            L
            LP : 84-88
            Length : 100-104cm',
            'Jeans hitam klasik dengan potongan modern yang cocok untuk berbagai gaya. Dibuat dari bahan denim berkualitas dengan sedikit stretch, memberikan kenyamanan ekstra saat digunakan seharian. Warna hitam pekat yang mudah dipadukan untuk tampilan kasual maupun semi-formal.

            Detail Produk:
            Warna: Hitam (Black)
            Ukuran: L (Lingkar pinggang ±84–88 cm)
            Bahan: Stretch denim
            Model: Regular
            Fitur: 4 kantong, resleting depan, belt loop

            Cocok untuk: Daily wear, nongkrong, atau gaya kerja kasual.',
            'Man, Jeans', 'New'],

            ['Man Clothing & Accessories', 'Navy Shirt', 'shirtman.jpg', 30000, 
            'Kemeja berlengan panjang berwarna navy yang cocok untuk tampilan formal pria yang memberikan kesan dewasa, rapi, dan sopan.
            Size
            XL
            LD : 114-120
            LL : 40-44
            Length : 80cm',
            'Kemeja pria warna navy dengan desain minimalis dan potongan modern. Terbuat dari bahan katun lembut yang nyaman dan adem dipakai, cocok untuk tampilan rapi kasual maupun semi-formal. Warna navy yang elegan mudah dipadukan dengan berbagai bawahan.

            Detail Produk:
            Warna: Navy (biru dongker)
            Ukuran: XL
            Bahan: 100% katun / cotton blend
            Model: Lengan panjang, kancing depan penuh, kerah standar

            Cocok untuk: Kerja, acara santai, atau dipadukan dengan celana jeans atau chino.',
            'Man, Shirt', 'New'],

            ['Kids Clothing & Accessories', 'White Dress', 'kidsdress.jpg', 60000, 
            'Buat si kecil tampil manis dan ceria dengan white dress anak bermotif polkadot ini. Terbuat dari bahan yang lembut dan adem, sehingga nyaman dipakai seharian. Desain simpel dengan sentuhan polkadot klasik membuat penampilan si kecil terlihat semakin lucu dan anggun.
            Size
            L
            LD : 76-80
            PL : 20
            Length : 75cm',
            'Dress manis untuk si kecil dengan warna putih bersih dan motif hati yang ceria. Didesain dengan lengan pendek model balon yang memberikan kesan menggemaskan dan nyaman saat dipakai. Cocok untuk acara santai, pesta ulang tahun, atau jalan-jalan.

            Detail Produk:
            Warna: Putih dengan motif hati
            Model: Dress lengan pendek balon
            Ukuran: L
            Bahan: Katun lembut, adem dan tidak gerah
            Panjang: Selutut (kurang lebih, tergantung tinggi anak)

            Cocok untuk: Anak usia 7–10 tahun, tampilan kasual maupun semi-formal.',
            'Kids, Dress', 'New'],

            ['Kids Clothing & Accessories', 'Camel Sweater', 'kids sweater.jpg', 30000, 
            'Sweater anak warna putih dengan gambar camel lucu di bagian depan. Bahan lembut, adem, dan nyaman dipakai untuk aktivitas harian atau saat cuaca dingin. Tampil ceria dan stylish di setiap momen.
            Size
            L
            LD : 74-78
            PL : 48
            Length : 52cm',
            'Sweater rajut lembut dan hangat untuk anak laki-laki, berwarna putih bersih dengan motif camel yang lucu di bagian depan. Desain simpel namun stylish, cocok untuk cuaca dingin atau tampilan kasual sehari-hari. Nyaman dikenakan dan tidak membuat gerah.

            Detail Produk:
            Warna: Putih
            Motif: Camel (unta) di bagian depan
            Ukuran: L (untuk usia 8–9 tahun, LD ±76–80 cm, panjang ±55 cm)
            Bahan: Rajut halus (knit) yang elastis dan ringan
            Model: Lengan panjang, rib pada lengan dan bawah sweater

            Cocok untuk: Musim dingin, jalan-jalan, atau kegiatan santai.',
            'Kids, Sweater', 'New'],

            ['Kids Clothing & Accessories', 'Jogger Pants Kids', 'kidspants.jpg', 30000, 
            'Jogger pants anak warna coklat dengan desain kasual yang nyaman dipakai untuk aktivitas harian si kecil. Terbuat dari bahan lembut dan elastis, jogger ini dilengkapi dengan karet di bagian pinggang , memberikan fleksibilitas saat bergerak. Warna coklat earthy tone yang netral dan mudah dipadukan.
            Size
            L
            LP : 60-64
            Length : 80-85cm',
            'Celana jogger panjang yang nyaman dan trendi untuk anak-anak. Terbuat dari bahan katun/stretch yang ringan dan adem, dilengkapi karet pinggang dan ujung kaki (ribbed cuff) untuk tampilan sporty dan pas di tubuh. Cocok dipakai sehari-hari, bermain, atau jalan-jalan.

            Detail Produk:
            Ukuran: L (untuk usia 8–9 tahun)
            Lingkar pinggang: ±60–64 cm (dengan karet)
            Panjang celana: ±80–85 cm
            Warna: Coklat
            Bahan: Katun stretch / baby terry / fleece (tergantung jenis)
            Fitur:
            2 saku samping
            Rib di pergelangan kaki

            Cocok untuk: Anak aktif yang suka gaya kasual dan nyaman.',
            'Kids, Pants', 'New'],

            ['Kids Clothing & Accessories', 'White Sneakers', 'kidsshoes.jpg', 25000, 
            'White sneaker anak dengan desain simpel dan stylish, memberikan kenyamanan maksimal untuk si kecil. Terbuat dari bahan berkualitas, ringan, dan mudah dipakai, cocok untuk berbagai aktivitas sehari-hari, mulai dari bermain hingga jalan-jalan. Tampilan putih bersih yang mudah dipadukan dengan berbagai outfit.
            Size
            28
            Panjang Kaki : 15.6-17cm',
            'Sneakers putih yang stylish dan serbaguna untuk anak-anak, cocok digunakan oleh baik anak laki-laki maupun perempuan. Terbuat dari bahan kanvas yang ringan dan nyaman, sepatu ini dilengkapi dengan sol karet yang anti-slip untuk memberikan kenyamanan sepanjang hari. Desain sederhana namun modern, cocok untuk berbagai aktivitas mulai dari bermain hingga jalan-jalan.

            Detail Produk:
            Ukuran: 28 (untuk usia 3–4 tahun)
            Warna: Putih
            Bahan: Kanvas berkualitas tinggi dan sol karet
            Model: Slip-on dengan tali elastis (mudah dipakai dan dilepas)
            Fitur: Ringan, nyaman, dan mudah dibersihkan

            Cocok untuk: Aktivitas sehari-hari, sekolah, atau acara santai.',
            'Kids, Shoes', 'New'],

            ['Muslim Clothing & Accessories', 'White Shirt', 'putih.jpg', 30000, 
            'Baju koko pria warna putih dengan desain minimalis dan elegan, sempurna untuk penampilan sopan namun tetap stylish. Terbuat dari bahan katun berkualitas yang ringan dan adem, baju koko ini cocok digunakan untuk berbagai acara, dari ibadah hingga acara formal seperti pernikahan atau acara keluarga.
            Size
            L
            LD : 114-120
            LL : 40-44
            Length : 80cm',
            'Tampil bersih, sopan, dan berwibawa dengan baju koko warna putih yang dirancang khusus untuk pria modern. Dengan desain simpel dan detail bordir halus (opsional sesuai model), baju koko ini cocok dikenakan untuk ibadah, acara formal, maupun kegiatan sehari-hari. Warna putihnya memberikan kesan suci dan elegan di setiap kesempatan.

            Fitur Unggulan:
            Warna Putih Bersih: Simbol kesederhanaan dan kesucian, mudah dipadukan dengan berbagai bawahan
            Material Nyaman: Menggunakan kain adem, ringan, dan menyerap keringat, nyaman dipakai seharian
            Potongan Regular Fit: Memberikan kenyamanan maksimal tanpa mengurangi kesan rapi
            Detail Bordir/Polos: Tersedia varian polos ataupun dengan aksen bordir elegan di bagian dada dan kerah
            Kerah Shanghai Modern: Memberikan tampilan lebih maskulin dan trendi

            Cocok untuk:
            Sholat Jumat, pengajian, atau acara religi lainnya
            Acara formal seperti pernikahan, halal bihalal, atau gathering keluarga
            Gaya harian yang sopan dan tetap stylish',
            'Muslim, Man, Shirt', 'New'],

            ['Muslim Clothing & Accessories', 'Gold Pashmina', 'pashmina.jpg', 25000, 
            'Pashmina warna gold yang elegan, memberikan sentuhan mewah pada tampilan Anda. Terbuat dari bahan berkualitas tinggi yang lembut dan nyaman, pashmina ini mudah dipadukan dengan berbagai busana, baik untuk acara formal maupun santai.
            Size
            180 cm x 70 cm, cukup panjang untuk berbagai gaya ikat dan nyaman dipakai seharian',
            'Pashmina elegan berwarna emas, memberikan sentuhan mewah pada penampilan Anda. Terbuat dari bahan berkualitas lembut dan nyaman di kulit, pashmina ini dapat dipakai untuk berbagai acara formal atau santai. Dengan ukuran 180 x 70 cm, pashmina ini cukup panjang untuk dibentuk dengan berbagai gaya.

            Detail Produk:
            Warna: Emas
            Ukuran: 180 x 70 cm
            Bahan: katun
            Desain: Lembut dan fleksibel, mudah dibentuk
            Fitur: Tahan lama dan nyaman digunakan sepanjang hari

            Cocok untuk: Padu padan gaya sehari-hari, acara formal, atau sebagai pelengkap busana untuk acara spesial.',
            'Muslim, Woman, Pashmina', 'New'],

            ['Muslim Clothing & Accessories', 'Beige Man Shirt', 'baju koko.jpg', 40000, 
            'Baju koko pria warna beige dengan desain yang simpel dan elegan, memberikan kenyamanan maksimal untuk penampilan sehari-hari atau acara formal. Terbuat dari bahan berkualitas yang adem dan ringan, baju koko ini cocok dipakai di berbagai kesempatan, baik untuk ibadah, acara keluarga, maupun acara resmi lainnya.
            Size
            L
            LD : 114-120
            LL : 40-44
            Length : 85cm',
            'Tampil rapi dan berkelas dengan baju muslim pria berwarna beige yang elegan. Dibuat dari bahan yang adem dan nyaman, cocok untuk kegiatan ibadah maupun acara formal. Potongan lengan panjang dengan kancing depan memberikan kesan sederhana namun tetap modern.

            Detail Produk:
            Warna: Beige
            Ukuran: L 
            Bahan: Katun
            Model: Lengan panjang, kerah koko, kancing depan
            Fitur: Nyaman dipakai, tidak mudah kusut

            Cocok untuk: Sholat, pengajian, acara keluarga, atau tampilan santai yang tetap sopan.',
            'Muslim, Man, Shirt', 'New'],

            ['Muslim Clothing & Accessories', 'Beige Gamis', 'beige gamis.jpg', 35000, 
            'Gamis wanita warna beige dengan desain elegan dan simpel, cocok untuk tampilan sehari-hari hingga acara formal. Terbuat dari bahan ringan dan nyaman, gamis ini memberikan kesan anggun dan modern dengan potongan yang longgar, ideal untuk aktivitas santai maupun acara spesial.
            Size
            L
            LD : 95-100
            LL : 30-35
            Length : 105-107cm',
            'Tampil anggun dengan beige gamis bernuansa soft dan elegan ini. Didesain dengan potongan longgar yang nyaman dan material berkualitas, gamis ini cocok dikenakan untuk berbagai kesempatan, mulai dari acara formal, pengajian, hingga casual hangout. Warna beige-nya yang netral memberikan kesan bersih, mewah, dan mudah dipadupadankan dengan berbagai aksesori.

            Model:
            Warna Beige Kalem: Memberikan kesan lembut, elegan, dan timeless
            Material Premium: Menggunakan bahan yang ringan, adem, dan nyaman dipakai seharian
            Potongan Longgar & Modest: Memberikan ruang gerak leluasa tanpa mengurangi kesan anggun
            Detail Rapi: Dilengkapi dengan aksen ruffle, tali pinggang opsional, atau kancing depan (tergantung model)
            Cocok untuk Hijab Style: Mudah dipadukan dengan berbagai model hijab favorit Anda

            Cocok untuk:
            Acara formal seperti pesta, pengajian, atau undangan
            Gaya harian modest yang nyaman dan tetap stylish
            Hadiah spesial untuk orang tersayang',
            'Muslim, Woman, Gamis', 'New'],

            ['Electronics', 'Sony Digicam', 'sony.jpg', 500000, 
            'Dilengkapi dengan sensor resolusi tinggi, fitur zoom optik, dan teknologi image stabilization, Sony Digicam menjadi pilihan tepat untuk kebutuhan dokumentasi harian, traveling, hingga konten kreatif. Hadir dengan desain compact dan ringan, mudah dibawa ke mana saja.',
            'Fitur Unggulan:
            Desain Stylish dan Portabel – Ringan dan mudah dibawa kemana saja, kamera ini cocok untuk perjalanan atau aktivitas sehari-hari.
            Lensa Wide dan Zoom Optik 5x – Abadikan lebih banyak dalam satu bidikan dengan lensa wide-angle, serta zoom optik 5x untuk menangkap gambar jarak jauh dengan jelas.
            LCD 2.7 Inch – Layar LCD besar yang memudahkan Anda melihat gambar dan mengatur pengambilan foto dengan lebih praktis.
            Perekaman Video HD 720p – Rekam video dengan kualitas HD yang jernih, ideal untuk vlog atau dokumentasi perjalanan.
            Baterai Tahan Lama – Dapat digunakan untuk pengambilan foto dalam waktu lama tanpa khawatir kehabisan daya.
            Spesifikasi Umum:
            Resolusi Kamera: 20.1 MP
            Lensa: Wide-angle lens + 5x Optical Zoom
            Layar: 2.7 inci LCD
            Perekaman Video: HD 720p
            Penyimpanan: Memori internal dan dukungan kartu SD
            Perawatan: Mudah dibersihkan dengan kain lembut',
            'Electronics, Camera, Original', 'New'],

            ['Electronics', 'Instax', 'instax.jpg', 350000, 
            'Dilengkapi dengan fitur auto exposure, flash otomatis, dan lensa berkualitas, Instax Polaroid cocok untuk berbagai acara seru seperti hangout, traveling, atau hadiah spesial untuk orang terdekat. Hadir dengan desain compact, stylish, dan pilihan warna menarik yang bisa disesuaikan dengan gaya Anda.',
            'Fitur Unggulan:
            Desain Retro yang Stylish – Kombinasi desain klasik dan warna menarik, membuat kamera Instax ini tidak hanya berfungsi dengan baik tetapi juga tampil fashionable di tangan Anda.
            Cetak Foto Langsung – Ambil gambar dan langsung dapatkan foto fisiknya dalam hitungan detik. Cocok untuk acara pesta, perjalanan, atau momen spesial lainnya.
            Lensa 60mm dengan Focal Length Fixed – Memberikan hasil foto yang tajam dan jernih, dengan fokus yang optimal untuk berbagai ukuran objek.
            Tersedia Berbagai Mode Pemotretan – Dilengkapi dengan pengaturan untuk mengambil gambar dengan kondisi pencahayaan yang berbeda, dari mode indoor hingga outdoor.
            Penggunaan yang Mudah – Sistem penggunaan yang sederhana, ideal untuk pemula atau siapa saja yang ingin merasakan keseruan fotografi instan tanpa kerumitan.
            Spesifikasi Umum:
            Jenis: Kamera Polaroid Instant
            Lensa: 60mm
            Ukuran Foto: 62mm x 46mm
            Media Cetak: Film Instax Mini
            Dimensi: Kompak dan ringan, mudah dibawa
            Baterai: Menggunakan baterai AA ',
            'Electronics, Camera, Original', 'New'],

            ['Electronics', 'Canon Camers', 'canon.jpg', 1050000, 
            'Dilengkapi dengan sensor resolusi tinggi, fitur zoom optik, dan teknologi image stabilization, kamera ini cocok untuk berbagai kebutuhan mulai dari fotografi harian, traveling, hingga konten profesional. Hadir dengan desain ergonomis dan kontrol menu yang mudah dioperasikan.',
            'Fitur Unggulan:
            Sensor 1.0 Inch dan Prosesor DIGIC 7 – Sensor besar dan prosesor gambar canggih memberikan hasil foto yang tajam, warna akurat, dan performa luar biasa, bahkan dalam kondisi cahaya rendah.
            Lensa Leica 4.2x Optical Zoom – Lensa dengan rentang zoom 24mm hingga 100mm memberikan fleksibilitas dalam pengambilan gambar, dari pemandangan luas hingga potret jarak dekat.
            Layar Sentuh Tilting – Layar LCD 3 inci yang dapat diputar, ideal untuk selfie atau perekaman vlog dengan tampilan jelas, serta pengaturan yang mudah.
            Autofokus Cepat dan Akurat – Sistem autofokus yang responsif, memungkinkan Anda mengambil gambar dengan detail tinggi tanpa kehilangan momen.
            Desain Ringkas dan Portabel – Dikenal dengan bodi kompak yang mudah dibawa kemana saja, kamera ini cocok untuk penggunaan sehari-hari, perjalanan, atau kegiatan outdoor.
            Spesifikasi Umum:
            Sensor: 1.0 inch CMOS
            Prosesor: DIGIC 7
            Lensa: 4.2x Optical Zoom (24-100mm equivalent)
            Perekaman Video: 4K, Full HD 1080p 60fps
            Layar: 3 inci LCD, layar sentuh dan tilting
            Penyimpanan: Kartu SD, SDHC, SDXC
            Dimensi: Kompak dan ringan (sekitar 105 x 60 x 42 mm)',
            'Electronics, Camera, Original', 'New'],

            ['Mom & Baby Essentials', 'Baby Monitor', 'monitor.jpg', 100000, 
            'Dilengkapi dengan fitur audio dan video, monitor ini memungkinkan Anda untuk mendengar dan melihat bayi Anda secara langsung Dengan konektivitas nirkabel dan layar yang jelas, baby monitor ini memberikan rasa tenang saat Anda berada di ruangan berbeda.',
            'Spesifikasi Umum:
            Layar: LCD ukuran besar
            Kualitas Audio: Suara jelas dan tanpa gangguan
            Jarak Pemantauan: Cakupan sinyal hingga 50 meter di dalam ruangan dan hingga 300 meter di luar ruangan
            Fitur Pendeteksi Suara: Memberikan peringatan suara saat bayi menangis atau mengeluarkan suara
            Baterai: Daya tahan baterai yang lama untuk penggunaan seharian
            Fitur Tambahan: Pengaturan volume suara, mode hemat daya, dan pengaturan tingkat sensitivitas mikrofon
            Fitur Unggulan:
            Kualitas Suara dan Gambar Jernih – Dilengkapi dengan teknologi audio dan video yang jelas, Anda dapat mendengarkan suara bayi dengan sempurna dan melihat kondisi bayi melalui layar monitor.
            Fungsi Perekaman Suara – Memungkinkan Anda untuk mendengarkan suara bayi, termasuk tangisan atau pergerakan kecil, sehingga Anda bisa segera merespons dengan cepat.
            Layar LCD Berukuran Besar – Memudahkan Anda untuk melihat bayi dengan jelas, bahkan dalam kondisi cahaya rendah, berkat layar LCD yang terang dan detail.
            Koneksi Stabil dan Jarak Jauh – Monitor ini memungkinkan pengawasan jarak jauh dengan koneksi yang stabil dan aman, memberi Anda kebebasan bergerak di rumah tanpa khawatir kehilangan sinyal.
            Fitur Pendeteksi Suara – Memberikan notifikasi atau peringatan ketika bayi menangis atau membuat suara, sehingga Anda bisa segera memeriksa keadaan bayi.',
            'Mom & Baby, Baby', 'New'],

            ['Mom & Baby Essentials', 'Black Car Seat', 'carseat.jpg', 150000, 
            'Dilengkapi dengan sabuk pengaman 5 titik, lapisan busa empuk, dan teknologi pelindung sisi, carseat ini memastikan keamanan buah hati Anda di setiap perjalanan. Desainnya yang ergonomis mendukung postur tubuh bayi, sementara bahan yang lembut dan mudah dibersihkan memberikan kenyamanan ekstra.',
            'Fitur Unggulan:
            Keamanan Terjamin – Dilengkapi dengan sabuk pengaman 5 titik dan sistem pengaman sisi yang memberikan perlindungan lebih saat terjadi benturan.
            Desain Ergonomis dan Nyaman – Tempat duduk empuk dan bahan kain yang lembut memberikan kenyamanan lebih untuk si kecil, bahkan saat perjalanan jauh sekalipun.
            Fitur Recline (Rebah) – Dilengkapi dengan fitur sandaran yang dapat diatur untuk posisi tidur atau duduk, memastikan si kecil tetap nyaman selama perjalanan.
            Bahan Berkualitas dan Tahan Lama – Terbuat dari material yang kuat dan tahan lama, memastikan car seat ini awet dan dapat digunakan dalam waktu lama.
            Portabel dan Ringan – Dapat dengan mudah dipindahkan antar kendaraan, sehingga sangat praktis untuk digunakan dalam berbagai situasi.
            Spesifikasi Umum:
            Sabuk Pengaman: 5 titik untuk perlindungan maksimal
            Sandaran: Dapat diatur untuk posisi tidur atau duduk
            Usia Penggunaan: Untuk bayi dan balita (0-4 tahun)
            Dimensi: Sesuai dengan ukuran standar car seat untuk mobil
            Perawatan: Casing dapat dilepas dan dicuci untuk kemudahan perawatan',
            'Mom & Baby, Car, Baby', 'New'],

            ['Mom & Baby Essentials', 'Pink Stroller', 'stroller.jpg', 250000, 
            'Dilengkapi dengan fitur pengaturan recline, sabuk pengaman 5 titik, dan roda yang mudah dikendalikan, stroller ini cocok untuk perjalanan harian Anda dan si kecil. Desainnya yang ringan dan kompak memudahkan Anda dalam menyimpannya atau membawanya ke mana saja',
            'Fitur Unggulan:
            Desain Elegan dan Stylish – Stroller dengan desain modern dan warna yang elegan, cocok untuk berbagai kegiatan luar ruangan dan memberikan tampilan stylish bagi si kecil.
            Kenyamanan Maksimal – Dilengkapi dengan tempat duduk yang empuk, sandaran yang dapat diatur, dan sabuk pengaman 5 titik untuk memastikan kenyamanan dan keamanan si kecil selama perjalanan.
            Rangka Kokoh dan Tahan Lama – Terbuat dari bahan berkualitas tinggi, stroller ini memiliki rangka kokoh yang mampu menahan beban dengan stabilitas maksimal.
            Pengoperasian Mudah – Dilengkapi dengan roda yang dapat berputar 360 derajat, serta sistem rem yang mudah dioperasikan, membuat stroller ini mudah dikendalikan di berbagai medan.
            Penyimpanan Tambahan – Terdapat keranjang bawah yang luas untuk menyimpan perlengkapan bayi atau barang bawaan lainnya, menjadikannya lebih praktis untuk digunakan.
            Spesifikasi Umum:
            Bahan: Rangka logam dan kain berkualitas
            Sabuk Pengaman: 5 titik untuk keamanan ekstra
            Roda: Roda depan dapat berputar 360 derajat, roda belakang dengan rem
            Sandaran: Dapat diatur untuk kenyamanan si kecil
            Fitur tambahan: Keranjang penyimpanan bawah',
            'Mom & Baby, Baby', 'New'],

            ['Toys & Hobbies', 'Montessori Toys', 'montesori.jpg', 30000, 
            'Berikan anak Anda pengalaman belajar yang menyenangkan dengan Mainan Montessori, dirancang khusus untuk merangsang perkembangan motorik, sensorik, logika, dan kreativitas. Terinspirasi dari metode pendidikan Montessori yang terkenal di seluruh dunia, mainan ini membantu anak belajar sambil bermain secara mandiri dan aktif.',
            'Mainan Montessori dirancang untuk membantu anak belajar dengan cara yang alami dan menyenangkan. Dengan menggunakan bahan berkualitas tinggi yang aman, mainan ini mengajak anak untuk berpikir kreatif, mengembangkan keterampilan motorik halus, serta meningkatkan konsentrasi dan koordinasi. Mainan seperti balok bangunan, puzzle, atau permainan pencocokan warna, memberikan tantangan yang sesuai dengan tahap perkembangan anak, sambil memberi mereka kebebasan untuk belajar mandiri.
            Dengan prinsip Montessori yang menekankan pembelajaran berbasis pengalaman, mainan ini adalah pilihan ideal untuk orangtua yang ingin memberikan stimulasi yang tepat dalam proses tumbuh kembang anak.
            Fitur Unggulan:
            Stimulasi Motorik & Sensorik – Membantu anak melatih koordinasi tangan-mata, ketelitian, serta kemampuan problem solving sejak usia dini.
            Bahan Aman & Ramah Anak – Terbuat dari kayu alami, cat non-toxic, dan bahan bebas BPA. Aman untuk balita dan anak-anak.
            Desain Edukatif & Interaktif – Mainan seperti busy board, puzzle kayu, rainbow stacker, dan shape sorter melatih konsentrasi dan imajinasi anak.
            Mendorong Kemandirian – Anak diajak mengeksplorasi dan belajar secara mandiri, tanpa tekanan, sesuai prinsip Montessori.',
            'Toys & Hobbies, Kids', 'New'],

            ['Toys & Hobbies', 'Hot Wheels', 'hotwheels.jpg', 35000, 
            'Masuki dunia balap dan petualangan dengan Hot Wheels, mobil mini die-cast legendaris yang digemari anak-anak dan kolektor di seluruh dunia. Dirancang dengan detail tinggi dan berbagai model keren, Hot Wheels menghadirkan keseruan balapan, stunt, dan koleksi dalam ukuran mini.',
            'Fitur Unggulan:
            Desain Realistis & Detail Tinggi – Replika mobil-mobil keren, mulai dari mobil sport, kendaraan off-road, hingga mobil fantasi dengan finishing yang memikat.
            Material Tahan Lama – Terbuat dari bahan die-cast (logam campuran) berkualitas dengan roda plastik yang kuat, cocok untuk dimainkan atau dikoleksi.
            Ukuran Praktis – Dengan skala 1:64, mobil ini mudah dibawa ke mana-mana dan pas untuk trek Hot Wheels.
            Banyak Varian – Tersedia ratusan model unik, termasuk seri edisi terbatas, karakter film, dan kolaborasi khusus.
            Cocok dengan Track Set Hot Wheels – Bisa digunakan di berbagai lintasan Hot Wheels untuk aksi lompatan, kecepatan, dan tantangan seru lainnya.
            Spesifikasi Umum:
            Skala: 1:64
            Bahan: Die-cast metal + plastik
            Dimensi mobil: ± 7–8 cm panjang
            Umur rekomendasi: 3 tahun ke atas
            Varian: Mobil sport, truk monster, mobil balap klasik, mobil karakter (Marvel, Batman, dll)',
            'Toys & Hobbies, Collections', 'New'],

            ['Toys & Hobbies', 'Knitting Kits', 'knitting kits.jpg', 60000, 
            'Ciptakan karya rajutan cantik dengan Knitting Kits yang praktis dan lengkap! Cocok untuk pemula yang baru belajar merajut maupun pengrajin yang ingin membuat proyek baru, kit ini hadir dengan semua perlengkapan yang dibutuhkan dalam satu paket.',
            'Fitur Unggulan:
            Paket Lengkap – Termasuk benang rajut (yarn), jarum rajut (knitting needles), panduan instruksi, dan aksesoris tambahan seperti stitch markers, jarum wol, dan pengukur rajut.
            Bahan Berkualitas – Benang lembut dan tidak mudah kusut, nyaman digunakan untuk berbagai proyek seperti syal, topi, tas, hingga boneka rajut (amigurumi).
            Pilihan Proyek Variatif – Tersedia berbagai pilihan proyek, seperti knitting untuk syal, topi, baju bayi, atau rajutan dekoratif.
            Cocok untuk Hadiah – Dikemas dalam box menarik, knitting kit juga sangat cocok dijadikan hadiah kreatif dan bermanfaat.
            Cocok untuk: Pemula, hobi crafter, komunitas rajut, ibu rumah tangga, remaja kreatif, atau siapa saja yang ingin mencoba kegiatan relaksasi sambil berkarya.',
            'Toys & Hobbies, Knit', 'New'],

            ['Furniture', 'Round Table', 'round table.jpg', 150000, 
            'Desainnya yang melingkar menciptakan suasana hangat dan ramah, ideal untuk berkumpul bersama keluarga atau teman. Terbuat dari material berkualitas tinggi, meja ini menawarkan stabilitas dan daya tahan yang luar biasa, dengan permukaan yang mudah dibersihkan dan dirawat.',
            'Fitur Unggulan:
            Desain Modern dan Elegan – Meja bundar memberikan kesan luas dan terbuka, cocok untuk berbagai gaya dekorasi ruangan, baik modern, minimalis, atau klasik.
            Bahan Berkualitas Tinggi – Terbuat dari kayu solid, logam, atau material berkualitas lainnya, meja ini dirancang untuk ketahanan dan keawetan jangka panjang.
            Mudah Ditempatkan di Berbagai Ruangan – Desain bulat memudahkan meja ini untuk ditempatkan di sudut atau pusat ruangan, cocok untuk ruang makan, ruang tamu, atau ruang kerja.
            Fungsional dan Praktis – Dilengkapi dengan ukuran yang cukup luas untuk menyajikan hidangan, tempat bekerja, atau sebagai meja dekoratif dengan akses yang mudah di semua sisi.
            Spesifikasi Umum:
            Bahan: Kayu solid, logam, atau bahan lainnya dengan finishing yang elegan
            Bentuk: Bulat
            Ukuran: Diameter 90cm / Tinggi 70cm
            Warna: coklat, putih
            Fungsi: Meja tamu, atau meja dekoratif
            Perawatan: Mudah dibersihkan dengan kain lembab atau kering',
            'Furniture, Table', 'New'],

            ['Furniture', 'Modern Desk', 'desk.jpg', 85000, 
            'Desain minimalis dan kaki meja yang kokoh memberikan kesan modern, cocok untuk berbagai gaya dekorasi interior',
            'Fitur Unggulan:
            Desain Minimalis & Modern – Tampilan yang sleek dan elegan, cocok untuk ruang kerja dengan tema dekorasi apapun, baik itu modern, industrial, maupun skandinavian.
            Bahan Berkualitas – Terbuat dari material premium seperti kayu MDF atau logam dengan finishing halus, memberikan daya tahan dan stabilitas yang luar biasa.
            Luas dan Nyaman – Meja dengan ukuran yang ideal untuk laptop, monitor, buku, dan alat tulis, memberikan kenyamanan ekstra saat bekerja atau belajar.
            Mudah Dirakit & Perawatannya – Desain yang sederhana membuat meja ini mudah dirakit, dan perawatannya pun mudah dengan hanya menggunakan lap kering atau lembab.
            Spesifikasi Umum:
            Bahan: Kayu MDF, logam, atau bahan lainnya dengan finishing yang elegan
            Warna:  coklat
            Ukuran: Panjang: 100cm/ Lebar: 60cm/ Tinggi: 70cm
            Desain: Minimalis dengan rak atau laci penyimpanan
            Perawatan: Mudah dibersihkan',
            'Furniture, Table', 'New'],

            ['Furniture', 'Pink Sofa', 'pink sofa.jpg', 250000, 
            'Dikenal dengan desain modern dan kenyamanan maksimal, sofa ini terbuat dari bahan berkualitas tinggi dengan busa empuk yang memberikan dukungan sempurna saat duduk. Ideal untuk ruangan minimalis atau yang ingin menambahkan aksen warna lembut.',
            'Fitur Unggulan:
            Desain Modern & Stylish – Dengan warna pink yang lembut dan desain minimalis, sofa ini cocok dipadukan dengan berbagai dekorasi ruangan, baik untuk ruang tamu, ruang keluarga, atau kamar tidur.
            Kenyamanan Optimal – Dilengkapi dengan busa berkualitas tinggi yang empuk, memberikan kenyamanan maksimal saat bersantai.
            Bahan Upholstery Berkualitas – Terbuat dari bahan kain yang lembut dan tahan lama, mudah dibersihkan, serta memberikan tampilan mewah.
            Struktur Kokoh & Tahan Lama – Rangka kayu yang kuat dan tahan lama menjamin sofa ini dapat digunakan dalam waktu panjang tanpa khawatir goyah.
            Spesifikasi Umum:
            Bahan: Kain pelapis berkualitas tinggi (cotton)
            Rangka: Kayu solid untuk kekuatan ekstra
            Ukuran: 2-seater
            Warna: Pink 
            Fungsi: Sofa untuk ruang tamu, ruang keluarga, atau kamar tidur',
            'Furniture, Sofa', 'New'],

            ['Woman Clothing & Accessories', 'White Long Dress', 'dress.jpg', 67000, 
            'Dress ini adalah pilihan yang tepat untuk acara formal atau acara khusus. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan:
            Desain elegan dan sederhana – Dress ini cocok untuk acara formal atau acara khusus, cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.
            Tampilan sederhana dan elegan – Dress ini terbuat dari bahan yang berkualitas tinggi dan memiliki desain sederhana dan elegan, cocok untuk pemula hingga yang berpengalaman.
            Bahan berkualitas tinggi – Dress ini terbuat dari bahan yang berkualitas tinggi dan memiliki daya tahan lama, cocok untuk pemula hingga yang berpengalaman.
            
            Spesifikasi Umum:
            Bahan: Katun
            Warna: Putih
            Ukuran: Panjang: 100cm/ Lebar: 60cm/ Tinggi: 70cm
            Desain: Minimalis dengan rak atau laci penyimpanan
            Perawatan: Mudah dibersihkan',
            'Woman Clothing & Accessories, Dress', 'New'],

            ['Woman Clothing & Accessories', 'Wide Jeans', 'jeans.jpg', 1000000, 
            'Jeans ini adalah pilihan yang tepat untuk acara formal atau acara khusus. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Woman Clothing & Accessories, Pants', 'New'],

            ['Woman Clothing & Accessories', 'Cullote', 'kulot.jpg', 65000, 
            'Kulot ini adalah pilihan yang tepat untuk acara formal atau acara khusus. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Woman Clothing & Accessories, Pants', 'New'],

            ['Woman Clothing & Accessories', 'Pink Heels', 'heels.jpg', 100000, 
            'Heels ini adalah pilihan yang tepat untuk acara formal atau acara khusus. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Woman Clothing & Accessories, Shoes', 'New'],

            ['Woman Clothing & Accessories', 'Leather Belt', 'belt.jpg', 30000, 
            'Belt ini adalah pilihan yang tepat untuk acara formal atau acara khusus. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Woman Clothing & Accessories, Belt', 'New'],

            ['Woman Clothing & Accessories', 'Sling Bag', 'slingbag.jpg', 65000, 
            'Sling Bag ini adalah pilihan yang tepat untuk acara formal atau acara khusus. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Woman Clothing & Accessories, Bags', 'New'],

            ['Woman Clothing & Accessories', 'Sneakers', 'sneakers.jpg', 95000, 
            'Sneakers ini adalah pilihan yang tepat untuk acara formal atau acara khusus. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Woman Clothing & Accessories, Shoes', 'New'],

            ['Woman Clothing & Accessories', 'Tote Bag', 'totebag.jpg', 65000, 
            'Tote Bag ini adalah pilihan yang tepat untuk acara casual. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Woman Clothing & Accessories, Bags', 'New'],

            ['Woman Clothing & Accessories', 'Flower Cap', 'cap.jpg', 35000, 
            'Topi ini adalah pilihan yang tepat untuk acara casual. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Woman Clothing & Accessories, Cap', 'New'],

            ['Woman Clothing & Accessories', 'Sunglasses', 'sun.jpg', 25000, 
            'Sunglasses ini adalah pilihan yang tepat untuk acara formal atau acara khusus. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Woman Clothing & Accessories, Others', 'New'],

            ['Woman Clothing & Accessories', 'Casual T-shirt', 'tshirt.jpg', 20000, 
            'T-shirt ini adalah pilihan yang tepat untuk acara casual. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Woman Clothing & Accessories, T-shirt', 'New'],

            ['Woman Clothing & Accessories', 'Oversized T-shirt', 'tshirt2.jpg', 65000, 
            'Oversized T-shirt ini adalah pilihan yang tepat untuk acara casual. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Woman Clothing & Accessories, T-shirt', 'New'],

            ['Kids Clothing & Accessories', 'Mini Pink Skirt', 'skirt.jpg', 30000, 
            'Mini Skirt ini adalah pilihan yang tepat untuk acara casual. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Kids Clothing & Accessories, Skirt', 'New'],

            ['Kids Clothing & Accessories', 'Maroon Flat Shoes', 'sepatukids.jpg', 30000, 
            'Flat Shoes ini adalah pilihan yang tepat untuk acara casual. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Kids Clothing & Accessories, Shoes', 'New'],

            ['Kids Clothing & Accessories', 'White Shirt', 'boy shirt.jpg', 20000, 
            'White Shirt ini adalah pilihan yang tepat untuk acara casual. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Kids Clothing & Accessories, Shirt', 'New'],

            ['Kids Clothing & Accessories', 'Red Beannie', 'beannie.jpg', 20000, 
            'Beannie ini adalah pilihan yang tepat untuk suhu dingin. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Kids Clothing & Accessories, Cap', 'New'],

            ['Kids Clothing & Accessories', 'Pink Jacket', 'kids jacket.jpg', 40000, 
            'Pink Jacket ini adalah pilihan yang tepat untuk acara casual. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Kids Clothing & Accessories, Jacket', 'New'],

            ['Kids Clothing & Accessories', 'Flower Dress', 'dresssss.jpg', 35000, 
            'Flower Dress ini adalah pilihan yang tepat untuk acara casual. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Kids Clothing & Accessories, Dress', 'New'],

            ['Kids Clothing & Accessories', 'Linen Shirt', 'kids shirt.jpg', 25000, 
            'Linen Shirt ini adalah pilihan yang tepat untuk acara formal. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Kids Clothing & Accessories, Shirt', 'New'],

            ['Kids Clothing & Accessories', 'Swim Suit', 'swim suit.jpg', 20000, 
            'Swin Suit ini adalah pilihan yang tepat untuk berenang. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Kids Clothing & Accessories, Swim Suit', 'New'],

            ['Kids Clothing & Accessories', 'Kids Backpack', 'kids bag.jpg', 40000, 
            'Tas ini adalah pilihan yang tepat untuk sekolah Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Kids Clothing & Accessories, Bag', 'New'],

            ['Kids Clothing & Accessories', 'Keropi Bucket Hat', 'keropi.jpg', 25000, 
            'Topi ini adalah pilihan yang tepat untuk acara casual. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Kids Clothing & Accessories, Cap', 'New'],

            ['Kids Clothing & Accessories', 'Dino Bag', 'dino bag.jpg', 30000, 
            'Dino Bag ini adalah pilihan yang tepat untuk sekolah. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Kids Clothing & Accessories, Bag', 'New'],

            ['Kids Clothing & Accessories', 'Yellow Blouse', 'baju.jpg', 30000, 
            'Yellow Blouse ini adalah pilihan yang tepat untuk acara casual. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Kids Clothing & Accessories, Blouse', 'New'],

            ['Muslim Clothing & Accessories', 'Green Gamis', 'ijo.jpg', 45000, 
            'Green Gamis ini adalah pilihan yang tepat untuk acara formal. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Muslim Clothing & Accessories, Gamis', 'New'],

            ['Muslim Clothing & Accessories', 'Blue Gamis', 'blue gamis.jpg', 45000, 
            'Blue Gamis ini adalah pilihan yang tepat untuk acara formal. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Muslim Clothing & Accessories, Gamis', 'New'],

            ['Muslim Clothing & Accessories', 'Black Sarong', 'sarung.jpg', 20000, 
            'Sarung ini adalah pilihan yang tepat untuk sholat. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Muslim Clothing & Accessories, Sarong', 'New'],

            ['Muslim Clothing & Accessories', 'Pink Turnikaet', 'turbann.jpg', 15000, 
            'Turnikaet ini adalah pilihan yang tepat untuk acara formal. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Muslim Clothing & Accessories, Hijab', 'New'],

            ['Muslim Clothing & Accessories', 'White Niqab', 'niqab.jpg', 15000, 
            'White Niqab ini adalah pilihan yang tepat untuk acara formal. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Muslim Clothing & Accessories, Niqab', 'New'],

            ['Muslim Clothing & Accessories', 'Lebaran Dress', 'lebaran.jpg', 55000, 
            'Lebaran Dress ini adalah pilihan yang tepat untuk acara formal. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Muslim Clothing & Accessories, Dress', 'New'],

            ['Muslim Clothing & Accessories', 'Peci', 'peci.jpg', 20000, 
            'Peci ini adalah pilihan yang tepat untuk acara formal. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Muslim Clothing & Accessories, Peci', 'New'],

            ['Muslim Clothing & Accessories', 'Sarong', 'sarung2.jpg', 45000, 
            'Sarong ini adalah pilihan yang tepat untuk sholat. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Muslim Clothing & Accessories, Sarong', 'New'],

            ['Muslim Clothing & Accessories', 'Pink Pashmina', 'pink hijab.jpg', 15000, 
            'Pink pashmina ini adalah pilihan yang tepat untuk acara casual. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Muslim Clothing & Accessories, Hijab', 'New'],

            ['Muslim Clothing & Accessories', 'Brown Niqab', 'brown.jpg', 15000, 
            'Brown Niqab ini adalah pilihan yang tepat untuk acara formal. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Muslim Clothing & Accessories, Hijab', 'New'],

            ['Muslim Clothing & Accessories', 'Brown Shirt', 'koko coklat.jpg', 45000, 
            'Brown Shirt ini adalah pilihan yang tepat untuk acara formal. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Muslim Clothing & Accessories, Shirt', 'New'],

            ['Muslim Clothing & Accessories', 'Navy Shirt', 'blue koko.jpg', 45000, 
            'Navy Shirt ini adalah pilihan yang tepat untuk acara formal. Cocok untuk pemula hingga yang berpengalaman, bisa digunakan untuk acara pesta, acara kantor, atau acara lainnya.',
            'Fitur Unggulan: ',
            'Muslim Clothing & Accessories, Shirt', 'New'],

            ['Carpentry', 'Screw', 'screw.jpg', 10000, 
            'Baut ini merupakan barang yang berkualitas tinggi, cocok untuk pemula karena mudah di gunakan.',
            'Fitur Unggulan: ',
            'Carpentry, Screw', 'New'],

            ['Carpentry', 'Hand Saw', 'gergaji.jpg', 15000, 
            'Gergaji ini merupakan barang yang berkualitas tinggi, cocok untuk pemula karena mudah di gunakan.',
            'Fitur Unggulan: ',
            'Carpentry, Saw', 'New'],

            ['Carpentry', 'Safety Glasses', 'safety.jpg', 15000, 
            'Safety Glasses ini merupakan barang yang berkualitas tinggi, cocok untuk pemula karena mudah di gunakan.',
            'Fitur Unggulan: ',
            'Carpentry, Safety Glasses', 'New'],

            ['Carpentry', 'Nail Gun', 'nailgun.jpg', 50000, 
            'Nail Gun ini merupakan barang yang berkualitas tinggi, cocok untuk pemula karena mudah di gunakan.',
            'Fitur Unggulan: ',
            'Carpentry, Nail Gun', 'New'],

            ['Carpentry', 'Electric Saw', 'gergaji Mesin.jpg', 45000, 
            'Electric Saw ini merupakan barang yang berkualitas tinggi, cocok untuk pemula karena mudah di gunakan.',
            'Fitur Unggulan: ',
            'Carpentry, Saw', 'New'],

            ['Furniture', 'Black Round Table', 'meja.jpg', 95000, 
            'Meja ini merupakan barang yang berkualitas tinggi, desain minimalis dan simple.',
            'Fitur Unggulan: ',
            'Furniture, Table', 'New'],

            ['Furniture', 'Soft Chair', 'kursi.jpg', 125000, 
            'Kursi ini merupakan barang yang berkualitas tinggi, desain minimalis dan simple.',
            'Fitur Unggulan: ',
            'Furniture, Chair', 'New'],

            ['Furniture', 'Standing Mirror', 'mirror.jpg', 100000, 
            'Kaca ini merupakan barang yang berkualitas tinggi, desain minimalis dan simple.',
            'Fitur Unggulan: ',
            'Furniture, Mirror', 'New'],

            ['Furniture', 'Wooden Wardrobe', 'lemari.jpg', 25000, 
            'Lemari ini merupakan barang yang berkualitas tinggi, desain minimalis dan simple.',
            'Fitur Unggulan: ',
            'Furniture, Wardrobe', 'New'],

            ['Furniture', 'Wooden Desk', 'wood desk.jpg', 750000, 
            'Laci ini merupakan barang yang berkualitas tinggi, desain minimalis dan simple.',
            'Fitur Unggulan: ',
            'Furniture, Desk', 'New'],

            ['Man Clothing & Accessories', 'Linen Pants', 'linen.jpg', 80000, 
            'Celana berbahan linen yang lembut dan nyaman untuk digunakan sehari-hari.',
            'Ukuran : L
            Bahan : Linen
            Warna : Putih
            Jenis : Celana Panjang',
            'Man Clothing & Accessories, Celana', 'New'],

            ['Man Clothing & Accessories', 'Adidas Sneakers', 'sepatu cowo.jpg', 250000, 
                        'Sepatu Adidas original berwarna putih dengan aksen hijau pada logo yang simple namun keren dan cocok untuk digunakan sehari-hari.',
                        'Ukuran : 44
                        Warna : Putih, hijau
                        Jenis : Sneakers',
                        'Man Clothing & Accessories, Original, Shoess', 'New'],

            ['Man Clothing & Accessories', 'Grey Shirt', 'shirtman2.jpg', 45000, 
                        'Kemeja berwarna abu-abu dengan lengan panjang yang cocok untuk acara formal maupun nonformal',
                        'Ukuran : L
                        Warna : Abu-abu
                        Jenis : Kemeja Lengan Panjang
                        Bahan : Cotton',
                        'Man Clothing & Accessories, Shirt', 'New'],

            ['Man Clothing & Accessories', 'Black Clutch', 'clutch.jpg', 45000, 
                        'Clutch berwarna hitam dengan model simple namun keren dan cocok untuk digunakan sehari-hari.',
                        'Ukuran : 30 x 15 cm
                        Warna : Hitam
                        Bahan : Leather',
                        'Man Clothing & Accessories, Clutch, Bag', 'New'],

            ['Man Clothing & Accessories', 'Sandal', 'sandal.jpg', 100000, 
                        'Sandal berbahan leather berwarna coklat yang nyaman dan cocok untuk digunakan sehari-hari.',
                        'Ukuran : 43
                        Warna : Coklat
                        Bahan : Leather',
                        'Man Clothing & Accessories, Sandal', 'New'],

            ['Man Clothing & Accessories', 'Sling Bag', 'slingman.jpg', 30000, 
                        'Sling bag berbahan parasut berwarna hitam yang cocok untuk digunakan sehari-hari dan tahan air.',
                        'Ukuran : 25 X 17 cm
                        Warna : Hitam
                        Bahan : Parasut',
                        'Man Clothing & Accessories, Bag', 'New'],

            ['Man Clothing & Accessories', 'Sunglasses', 'sunman.jpg', 35000, 
                        'Sunglass berbahan plastik untuk pria dengan model simple namun keren dan cocok untuk digunakan saat sedang ke pantai atau tempat outdoor lainnya.',
                        'Warna : Hitam
                        Bahan : Plastik',
                        'Man Clothing & Accessories, Sunglasses', 'New'],

            ['Man Clothing & Accessories', 'Brown Cap', 'capman.jpg', 30000, 
                        'Topi simpel berwarna coklat dengan bahan kain yang nyaman dan cocok untuk digunakan sehari-hari.',
                        'Warna : Coklat
                        Bahan : kain',
                        'Man Clothing & Accessories, Cap', 'New'],

            ['Man Clothing & Accessories', 'Short Linen Pants', 'shortman.jpg', 70000, 
                        'Celana pendek pria dengan bahan linen yang nyaman dan cocok untuk digunakan sehari-hari.',
                        'Warna : Beige
                        Bahan : kain',
                        'Man Clothing & Accessories, Pants, Linen', 'New'],

            ['Man Clothing & Accessories', 'Black Belt', 'beltman.jpg', 65000, 
                        'Sabuk berwarna hitam dengan bahan leather yang nyaman dan cocok untuk digunakan sehari-hari.',
                        'Warna : Black
                        Bahan : leather',
                        'Man Clothing & Accessories, Belt', 'New'],

            ['Man Clothing & Accessories', 'Champion Hoodie', 'hoodie man.jpg', 175000, 
                        'Hoodie Champion original berwarna pink',
                        'Warna : Pink
                        Bahan : Cotton',
                        'Man Clothing & Accessories, Hoodie, Original', 'New'],

            ['Man Clothing & Accessories', 'Classic Formal Shoes', 'sepatu2.jpg', 125000, 
                        'Sepatu formal berwarna hitam dengan model simple namun keren dan cocok untuk digunakan sehari-hari.',
                        'Warna : Black
                        Bahan : leather',
                        'Man Clothing & Accessories, Shoes, Formal', 'New'],

            ['Sports Equipment', 'Rowing Machine', 'rowing Machine (1).jpg', 200000, 
                        'Mesin rowing berwarna hitam sudah termasuk dengan kabel dan tali serta beban.',
                        'Warna : Black
                        Bahan : Besi',
                        'Sports Equipment, Machine', 'New'],

            ['Sports Equipment', 'Leg Press Machine', 'leg-press.jpg', 400000, 
                        'Mesin leg press berwarna hitam sudah termasuk dengan kabel dan tali serta beban.',
                        'Warna : Black
                        Bahan : Besi',
                        'Sports Equipment, Machine', 'New'],

            ['Sports Equipment', 'Static Bike', 'static bike.jpg', 300000, 
                        'Mesin static bike berwarna hitam sudah termasuk tempat duduk serta pedal dan karet pegangan tangan dan monitor.',
                        'Warna : Black
                        Bahan : Besi',
                        'Sports Equipment, Machine', 'New'],

            ['Sports Equipment', 'Pull Up Bar', 'pull up bar.jpg', 100000, 
                        'Alat Pull Up manual berbentuk bar yang bisa ditempelkan di tembok agar bisa olahraga dengan cepat dan efisien meskipun di rumah, dilengkapi dengan karet untuk daerah gripnya agar tidak licin.',
                        'Warna : Black
                        Bahan : Besi',
                        'Sports Equipment, Machine', 'New'],

            ['Sports Equipment', 'Push Up Bar', 'push-up-bar.jpg', 75000, 
                        'Alat Push Up manual berbentuk bar yang bisa digunakan dimana saja agar bisa olahraga dengan cepat dan efisien meskipun di rumah, dilengkapi dengan karet untuk daerah gripnya agar tidak licin.',
                        'Warna : Black
                        Bahan : Besi',
                        'Sports Equipment, Machine', 'New'],

            ['Sports Equipment', 'Bench Press', 'bench press.jpg', 150000, 
                        'Alat bench press lengkap dengan bar, kursi, serta beban',
                        'Warna : Black
                        Bahan : Besi',
                        'Sports Equipment, Machine', 'New'],

            ['Books', 'Seni Mengatasi Depresi', 'depresi.jpg', 15000, 
                        'Buku Seni Mengatasi Depresi',
                        'Ukuran : 20 x 15 cm
                        Bahan : Soft Cover',
                        'Books, Non-Fiction', 'New'],

            ['Books', 'The Alpha Girls', 'alpha.jpg', 25000, 
                        'Buku The Alpha Girls',
                        'Ukuran : 20 x 15 cm
                        Bahan : Soft Cover',
                        'Books, Non-Fiction', 'New'],

            ['Books', 'I Used To Have A Plan', 'plan.jpg', 20000, 
                        'Buku I Used To Have A Plan',
                        'Ukuran : 20 x 15 cm
                        Bahan : Soft Cover',
                        'Books, Non-Fiction', 'New'],

            ['Books', 'The Introverts Way', 'introvert.jpg', 15000, 
                        'Buku The Introverts Way',
                        'Ukuran : 20 x 15 cm
                        Bahan : Soft Cover',
                        'Books, Non-Fiction', 'New'],

            ['Books', 'The Highly Sensitive Person', 'sensi.jpg', 20000, 
                        'Buku The Highly Sensitive Person',
                        'Ukuran : 20 x 15 cm
                        Bahan : Soft Cover',
                        'Books, Non-Fiction', 'New'],

            ['Books', 'The Woman Who Thinks Too Much', 'think.jpg', 15000, 
                        'Buku The Woman Who Thinks Too Much',
                        'Ukuran : 20 x 15 cm
                        Bahan : Soft Cover',
                        'Books, Non-Fiction', 'New'],

            ['Books', 'Nice Girls Dont Speak Up', 'speak.jpg', 25000, 
                        'Buku Nice Girls Dont Speak Up',
                        'Ukuran : 20 x 15 cm
                        Bahan : Hard Cover',
                        'Books, Non-Fiction', 'New'],

            ['Books', 'Single On Purpose', 'single.jpg', 20000, 
                        'Buku Single On Purpose',
                        'Ukuran : 20 x 15 cm
                        Bahan : Soft Cover',
                        'Books, Non-Fiction', 'New'],

            ['Books', 'The Ten Types of Human', 'types.jpg', 20000, 
                        'Buku The Ten Types of Human',
                        'Ukuran : 20 x 15 cm
                        Bahan : Soft Cover',
                        'Books, Non-Fiction', 'New'],
        ];
    
        foreach ($products as [$category, $name, $image, $price, $short_description, $long_description, $tags, $condition]) {
            \App\Models\Product::create([
                'name' => $name,
                'image' => $image,
                'price' => $price,
                'short_description' => $short_description,
                'long_description' => $long_description,
                'tags' => $tags,
                'category_id' => \App\Models\Category::where('name', $category)->first()->id,
                'condition' => $condition
            ]);
        }
    }
}