
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

// TOGGLE DESELECTION FOR RADIO BUTTONS
function enableRadioToggle(groupName) {
    let lastChecked = null;

    document.querySelectorAll(`input[name="${groupName}"]`).forEach(radio => {
        radio.addEventListener('mousedown', function (e) {
            if (this === lastChecked) {
                // Deselect on second click
                e.preventDefault(); // Prevent the default selection
                this.checked = false;
                lastChecked = null;
                filterArticles(); // Trigger the filter manually
            } else {
                lastChecked = this;
            }
        });

        radio.addEventListener('change', filterArticles);
    });
}

// Run toggling logic for both groups
enableRadioToggle('topic');
enableRadioToggle('industry');
