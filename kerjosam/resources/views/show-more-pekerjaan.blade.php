<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>KerjoSam | Pekerjaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white">

<!-- SECTION PEKERJAAN -->
<section class="max-w-6xl mx-auto px-6 py-16">

    <!-- GRID PEKERJAAN -->
    <div id="jobList" class="grid grid-cols-1 md:grid-cols-2 gap-10">

        <!-- CARD -->
        <div class="bg-white rounded-3xl shadow-lg overflow-hidden hidden job-card">
            <img src="https://images.unsplash.com/photo-1508780709619-79562169bc64"
                 class="h-44 w-full object-cover">

            <div class="p-6 text-black">
                <h3 class="font-bold text-lg mb-3">Copy Writing Artikel</h3>

                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">Copy Writing</span>
                    <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">Artikel</span>
                </div>

                <button class="bg-red-600 text-white px-6 py-2 rounded-full float-right">
                    HAPUS
                </button>
            </div>
        </div>

        <!-- CARD -->
        <div class="bg-white rounded-3xl shadow-lg overflow-hidden hidden job-card">
            <img src="https://images.unsplash.com/photo-1508780709619-79562169bc64"
                 class="h-44 w-full object-cover">

            <div class="p-6 text-black">
                <h3 class="font-bold text-lg mb-3">Heuristic Evaluation Aplikasi Jurnal</h3>

                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">UI/UX</span>
                    <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">Testing</span>
                </div>

                <button class="bg-red-600 text-white px-6 py-2 rounded-full float-right">
                    HAPUS
                </button>
            </div>
        </div>

        <!-- CARD -->
        <div class="bg-white rounded-3xl shadow-lg overflow-hidden hidden job-card">
            <img src="https://images.unsplash.com/photo-1508780709619-79562169bc64"
                 class="h-44 w-full object-cover">

            <div class="p-6 text-black">
                <h3 class="font-bold text-lg mb-3">Maintenance Website SPMB</h3>

                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">Web Development</span>
                    <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">Website</span>
                </div>

                <button class="bg-red-600 text-white px-6 py-2 rounded-full float-right">
                    HAPUS
                </button>
            </div>
        </div>

        <!-- CARD -->
        <div class="bg-white rounded-3xl shadow-lg overflow-hidden hidden job-card">
            <img src="https://images.unsplash.com/photo-1508780709619-79562169bc64"
                 class="h-44 w-full object-cover">

            <div class="p-6 text-black">
                <h3 class="font-bold text-lg mb-3">UAT Website</h3>

                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-4 py-1 text-sm border border-red-500 text-red-500 rounded-full">Testing</span>
                </div>

                <button class="bg-red-600 text-white px-6 py-2 rounded-full float-right">
                    HAPUS
                </button>
            </div>
        </div>

    </div>

    <!-- BUTTON SHOW MORE -->
    <div class="text-center mt-14">
        <button id="showMoreBtn"
                class="bg-red-600 hover:bg-red-700 transition text-white px-10 py-3 rounded-full font-semibold">
            Show More
        </button>
    </div>

</section>

<!-- SCRIPT SHOW MORE -->
<script>
    const cards = document.querySelectorAll('.job-card');
    const button = document.getElementById('showMoreBtn');
    let visible = 2;

    function showCards() {
        for (let i = 0; i < visible; i++) {
            if (cards[i]) cards[i].classList.remove('hidden');
        }
    }

    showCards();

    button.addEventListener('click', () => {
        visible += 2;
        showCards();

        if (visible >= cards.length) {
            button.style.display = 'none';
        }
    });
</script>

</body>
</html>
