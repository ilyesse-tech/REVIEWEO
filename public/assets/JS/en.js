const commentsPerPage = 5;
        const comments = document.querySelectorAll('.comment-item');
        const pagination = document.getElementById('pagination');
        const totalPages = Math.ceil(comments.length / commentsPerPage);
        let currentPage = 1;

        function showPage(page) {
            const start = (page - 1) * commentsPerPage;
            const end = start + commentsPerPage;

            comments.forEach((comment, index) => {
                comment.style.display = (index >= start && index < end) ? 'block' : 'none';
            });

            renderPagination(page);
        }

        function renderPagination(activePage) {
            pagination.innerHTML = '';

            for (let i = 1; i <= totalPages; i++) {
                const button = document.createElement('button');
                button.textContent = i;
                button.className = i === activePage
                    ? 'btn btn-dark btn-sm'
                    : 'btn btn-outline-dark btn-sm';

                button.addEventListener('click', () => {
                    currentPage = i;
                    showPage(currentPage);
                });

                pagination.appendChild(button);
            }
        }

        showPage(currentPage);

        const reactionButtons = document.querySelectorAll('.reaction-btn');

        reactionButtons.forEach(button => {
            button.addEventListener('click', () => {
                const span = button.querySelector('span');
                let count = parseInt(span.textContent);
                span.textContent = count + 1;

                button.classList.remove('btn-outline-secondary');
                button.classList.add('btn-secondary');
            });
        });