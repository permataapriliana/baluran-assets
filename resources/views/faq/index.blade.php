@extends('layouts.mainfaq')

@section('content')

<div id="faq-content">
    {{-- Default konten kategori pertama --}}
    @include('faq.partials.tentang')
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebarLinks = document.querySelectorAll('.sidebar ul li a');
        const faqContent = document.getElementById('faq-content');

        sidebarLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                // Hapus aktif semua link
                sidebarLinks.forEach(l => l.classList.remove('active'));
                this.classList.add('active');

                // Ambil url (bisa gunakan route Laravel nanti)
                fetch(this.getAttribute('href'))
                    .then(res => res.text())
                    .then(html => {
                        faqContent.innerHTML = html;
                        bindAccordion();
                    })
                    .catch(err => console.error(err));
            });
        });

        function bindAccordion() {
            const items = faqContent.querySelectorAll('.faq-item');
            items.forEach(item => {
                const q = item.querySelector('.faq-question');
                q.addEventListener('click', () => {
                    items.forEach(i => i !== item && i.classList.remove('active'));
                    item.classList.toggle('active');
                });
            });
        }

        bindAccordion();
    });
</script>
@endsection
