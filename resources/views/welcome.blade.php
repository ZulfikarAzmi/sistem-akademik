<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joule University - Sistem Akademik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .feature-card {
            transition: all 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-gray-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-lg">JU</span>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-gray-900">Joule University</h1>
                        <p class="text-xs text-gray-500">Sistem Akademik Terintegrasi</p>
                    </div>
                </div>
                
                <nav class="flex items-center space-x-4">
                    <a href="{{ route('login') }}" 
                       class="px-5 py-2.5 text-gray-700 font-medium rounded-lg hover:bg-gray-100 transition duration-200">
                        Masuk
                    </a>
                    <a href="{{ route('register') }}" 
                       class="px-5 py-2.5 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-medium rounded-lg hover:from-blue-600 hover:to-purple-700 transition duration-200 shadow-sm">
                        Daftar
                    </a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <main class="flex-grow">
        <section class="hero-gradient text-white py-16">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                        Selamat Datang di 
                        <span class="bg-white/10 backdrop-blur-sm px-3 py-1 rounded-lg">Joule University</span>
                    </h2>
                    <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                        Platform Sistem Akademik Terintegrasi yang dirancang untuk mendukung 
                        proses belajar mengajar yang efisien dan modern.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('login') }}" 
                           class="px-8 py-3 bg-white text-blue-600 font-semibold rounded-lg hover:bg-gray-100 transition duration-200 shadow-lg">
                            Mulai Sekarang
                        </a>
                        <a href="#features" 
                           class="px-8 py-3 border-2 border-white/30 text-white font-semibold rounded-lg hover:bg-white/10 transition duration-200">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-16 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Fitur Unggulan</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">
                        Sistem akademik yang komprehensif untuk mahasiswa, dosen, dan administrasi
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <!-- Feature 1 -->
                    <div class="feature-card bg-gray-50 rounded-xl p-6 border border-gray-200">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 016.16 10.922L12 14z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-2">Manajemen Mahasiswa</h4>
                        <p class="text-gray-600">
                            Kelola data mahasiswa, nilai, dan progress akademik secara terintegrasi
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="feature-card bg-gray-50 rounded-xl p-6 border border-gray-200">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20h6m-6 0a2 2 0 01-2-2H5a4 4 0 014-4h1m0 0a2 2 0 012-2h2a2 2 0 012 2m0 0v4m0 0a2 2 0 002 2"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-2">Portal Dosen</h4>
                        <p class="text-gray-600">
                            Sistem pengelolaan mata kuliah, penilaian, dan bimbingan akademik
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="feature-card bg-gray-50 rounded-xl p-6 border border-gray-200">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-2">Laporan Real-time</h4>
                        <p class="text-gray-600">
                            Akses laporan dan analisis data akademik secara real-time dan akurat
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-16 bg-gray-900 text-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-4 gap-8 text-center max-w-4xl mx-auto">
                    <div>
                        <div class="text-3xl font-bold mb-2">5000+</div>
                        <div class="text-gray-400">Mahasiswa Aktif</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold mb-2">250+</div>
                        <div class="text-gray-400">Dosen Profesional</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold mb-2">50+</div>
                        <div class="text-gray-400">Program Studi</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold mb-2">99%</div>
                        <div class="text-gray-400">Kepuasan Pengguna</div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center space-x-3 mb-4 md:mb-0">
                    <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-sm">JU</span>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">Joule University</div>
                        <div class="text-sm text-gray-500">Sistem Akademik Terintegrasi</div>
                    </div>
                </div>
                
                <div class="text-sm text-gray-600">
                    &copy; {{ date('Y') }} Joule University. All rights reserved.
                </div>
            </div>
        </div>
    </footer>

</body>
</html>