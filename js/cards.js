const cards = document.querySelectorAll('.card');
const cardsContainer = document.querySelector('.cards');

cardsContainer.addEventListener('mousemove', (e) => {
    const card = e.target.closest('.card');
    if (!card) return;

    const rect = card.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const image = cardsContainer.dataset.image;
    card.style.backgroundImage = `url(${image})`;
    card.style.backgroundPosition = `${x}px ${y}px`;
});

cardsContainer.addEventListener('mouseleave', () => {
    const image = cardsContainer.dataset.image;
    cards.forEach(card => card.style.backgroundImage = `none`);
});