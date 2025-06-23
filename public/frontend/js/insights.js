
// FILTERING LOGIC
function filterArticles() {
    const selectedTopic = document.querySelector('input[name="topic"]:checked')?.value || '';
    const selectedIndustry = document.querySelector('input[name="industry"]:checked')?.value || '';

    document.querySelectorAll('.article').forEach(card => {
        const cardTopic = card.getAttribute('data-topic');
        const cardIndustry = card.getAttribute('data-industry');

        const topicMatch = !selectedTopic || cardTopic === selectedTopic;
        const industryMatch = !selectedIndustry || cardIndustry === selectedIndustry;

        card.style.display = (topicMatch && industryMatch) ? 'block' : 'none';
    });
}

// Apply filter on topic change
document.querySelectorAll('input[name="topic"]').forEach(radio => {
    radio.addEventListener('change', filterArticles);
});

// Apply filter on industry change
document.querySelectorAll('input[name="industry"]').forEach(radio => {
    radio.addEventListener('change', filterArticles);
});

// COLLAPSE TOGGLE + ARROW DIRECTION
document.querySelectorAll('.filter-title').forEach(header => {
    const targetSelector = header.getAttribute('data-bs-target');
    const collapseTarget = document.querySelector(targetSelector);
    const arrow = header.querySelector('.arrow');

    if (collapseTarget) {
        collapseTarget.addEventListener('show.bs.collapse', () => {
            arrow.textContent = '▲';
        });

        collapseTarget.addEventListener('hide.bs.collapse', () => {
            arrow.textContent = '▼';
        });
    }
});
