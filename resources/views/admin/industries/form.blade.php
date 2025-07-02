<form action="{{ isset($industry) ? route('admin.industries.update', $industry) : route('admin.industries.store') }}"
    method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($industry)) @method('PUT') @endif

    {{-- Industry Title --}}
    <div class="mb-4">
        <label for="title" class="form-label fw-bold">Industry Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
            value="{{ old('title', $industry->title ?? '') }}" required>
        @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    {{-- Slug --}}
    <div class="mb-4">
        <label for="slug" class="form-label fw-bold">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
            value="{{ old('slug', $industry->slug ?? '') }}" required>
        @error('slug')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    {{-- Hero Section --}}
    <h5 class="mb-3 fw-bold">Hero Section</h5>
    <div class="mb-3">
        <label for="hero_heading" class="form-label fw-bold">Hero Heading</label>
        <input type="text" class="form-control" id="hero_heading" name="hero_heading"
            value="{{ old('hero_heading', $industry->hero_heading ?? '') }}">
    </div>
    <div class="mb-3">
        <label for="hero_description" class="form-label fw-bold">Hero Description</label>
        <textarea class="form-control" id="hero_description" name="hero_description"
            rows="3">{{ old('hero_description', $industry->hero_description ?? '') }}</textarea>
    </div>
    <div class="mb-4">
        <label for="hero_image" class="form-label fw-bold">Hero Image</label>
        <input type="file" class="form-control" id="hero_image" name="hero_image" accept="image/*">
        @if(isset($industry) && $industry->hero_image)

            <img src="{{ asset('storage/' . $industry->hero_image) }}" alt="Hero Image" style="max-height: 120px;">
        @endif
    </div>

    {{-- Subhero Section --}}
    <h5 class="mb-3 fw-bold">Subhero Section</h5>
    <div class="mb-3">
        <label class="form-label fw-bold">Subhero Heading</label>
        <input type="text" name="subhero_heading" class="form-control"
            value="{{ old('subhero_heading', $industry->subhero_heading ?? '') }}">
    </div>
    @for($i = 1; $i <= 4; $i++)
        <div class="mb-3">
            <label class="form-label fw-bold">Subhero Description {{ $i }}</label>
            <input type="text" name="subhero_description{{ $i }}" class="form-control"
                value="{{ old('subhero_description' . $i, $industry->{'subhero_description' . $i} ?? '') }}">
        </div>
    @endfor

    {{-- Solution Cards --}}
    <h5 class="mb-3 fw-bold">Solution Cards</h5>
    <div class="mb-3">
        <label class="form-label fw-bold">Solution Cards Heading</label>
        <input type="text" name="solution_cards_heading" class="form-control"
            value="{{ old('solution_cards_heading', $industry->solution_cards_heading ?? '') }}">
    </div>
    <div id="card-wrapper" class="mb-4">
        @php
            $cards = old('cards', $industry->cards ?? [['card_heading' => '', 'card_description' => '']]);
        @endphp
        @foreach($cards as $i => $card)
            <div class="card mb-3 p-3 border">
                <div class="mb-2">
                    <label class="form-label fw-bold">Card Heading</label>
                    <input type="text" name="cards[{{ $i }}][card_heading]" class="form-control"
                        value="{{ $card['card_heading'] ?? '' }}">
                </div>
                <div>
                    <label class="form-label fw-bold">Card Description</label>
                    <textarea name="cards[{{ $i }}][card_description]" class="form-control"
                        rows="2">{{ $card['card_description'] ?? '' }}</textarea>
                </div>
            </div>
        @endforeach
    </div>
    <button type="button" class="btn btn-secondary mb-4" onclick="addCard()">+ Add Card</button>

    {{-- Counter Section --}}
    <h5 class="mb-3 fw-bold">Counters</h5>
    <div class="mb-3">
        <label class="form-label fw-bold">Counter Heading</label>
        <input type="text" name="counter_heading" class="form-control"
            value="{{ old('counter_heading', $industry->counter_heading ?? '') }}">
    </div>
    <div id="counter-wrapper" class="mb-4">
        @php
            $counters = old('counters', $industry->counters ?? [['title' => '', 'number' => '']]);
        @endphp
        @foreach($counters as $i => $counter)
            <div class="row g-2 mb-3 align-items-center border rounded p-3">
                <div class="col-md-8">
                    <label class="form-label fw-bold">Counter Title</label>
                    <input type="text" name="counters[{{ $i }}][title]" class="form-control"
                        value="{{ $counter['title'] ?? '' }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold">Number</label>
                    <input type="number" name="counters[{{ $i }}][number]" class="form-control"
                        value="{{ $counter['number'] ?? '' }}">
                </div>
            </div>
        @endforeach
    </div>
    <button type="button" class="btn btn-secondary mb-4" onclick="addCounter()">+ Add Counter</button>

    {{-- Result Cards --}}
    <h5 class="mb-3 fw-bold">Result Cards</h5>
    <div class="mb-3">
        <label class="form-label fw-bold">Result Cards Heading</label>
        <input type="text" name="result_cards_heading" class="form-control"
            value="{{ old('result_cards_heading', $industry->result_cards_heading ?? '') }}">
    </div>
    <div id="result-card-wrapper" class="mb-4">
        @php
            $resultCards = old('result_cards', $industry->resultCards ?? [['card_heading' => '', 'card_description' => '', 'card_image' => null]]);
        @endphp
        @foreach($resultCards as $i => $rc)
            <div class="card p-3 border mb-3">
                <div class="mb-2">
                    <label class="form-label fw-bold">Card Heading</label>
                    <input type="text" name="result_cards[{{ $i }}][card_heading]" class="form-control"
                        value="{{ $rc['card_heading'] ?? '' }}">
                </div>
                <div class="mb-2">
                    <label class="form-label fw-bold">Card Description</label>
                    <textarea name="result_cards[{{ $i }}][card_description]" class="form-control"
                        rows="2">{{ $rc['card_description'] ?? '' }}</textarea>
                </div>
                <div class="mb-2">
                    <label class="form-label fw-bold">Card Image</label>
                    <input type="file" name="result_cards[{{ $i }}][card_image]" class="form-control" accept="image/*">
                    @if(isset($rc['card_image']) && $rc['card_image'])
                        <img src="{{ asset('storage/' . $rc['card_image']) }}" class="img-thumbnail mt-2"
                            alt="Result Card Image" style="max-height: 120px;">
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    <button type="button" class="btn btn-secondary mb-4" onclick="addResultCard()">+ Add Result Card</button>

    {{-- CTA Section --}}
    <h5 class="mb-3 fw-bold">Call To Action (CTA)</h5>
    <div class="mb-3">
        <label for="cta_title" class="form-label fw-bold">CTA Title</label>
        <input type="text" class="form-control" id="cta_title" name="cta_title"
            value="{{ old('cta_title', $industry->cta_title ?? '') }}">
    </div>
    <div class="mb-4">
        <label for="cta_image" class="form-label fw-bold">CTA Image</label>
        <input type="file" class="form-control" id="cta_image" name="cta_image" accept="image/*">
        @if(isset($industry) && $industry->cta_image)
            <img src="{{ asset('storage/' . $industry->cta_image) }}" alt="CTA Image" style="max-height: 120px;">
        @endif
    </div>

    <button type="submit" class="btn btn-primary mb-5">{{ isset($industry) ? 'Update' : 'Create' }}</button>
</form>

{{-- Add JavaScript below or include as separate file --}}
<script>
    function addCard() {
        let index = document.querySelectorAll('#card-wrapper .card').length;
        document.getElementById('card-wrapper').insertAdjacentHTML('beforeend', `
            <div class="card mb-3 p-3 border">
                <div class="mb-2">
                    <label class="form-label fw-bold">Card Heading</label>
                    <input type="text" name="cards[${index}][card_heading]" class="form-control">
                </div>
                <div>
                    <label class="form-label fw-bold">Card Description</label>
                    <textarea name="cards[${index}][card_description]" class="form-control" rows="2"></textarea>
                </div>
            </div>
        `);
    }

    function addCounter() {
        let index = document.querySelectorAll('#counter-wrapper .row').length;
        document.getElementById('counter-wrapper').insertAdjacentHTML('beforeend', `
            <div class="row g-2 mb-3 align-items-center border rounded p-3">
                <div class="col-md-8">
                    <label class="form-label fw-bold">Counter Title</label>
                    <input type="text" name="counters[${index}][title]" class="form-control">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold">Number</label>
                    <input type="number" name="counters[${index}][number]" class="form-control">
                </div>
            </div>
        `);
    }

    function addResultCard() {
        let index = document.querySelectorAll('#result-card-wrapper .card').length;
        document.getElementById('result-card-wrapper').insertAdjacentHTML('beforeend', `
            <div class="card p-3 border mb-3">
                <div class="mb-2">
                    <label class="form-label fw-bold">Card Heading</label>
                    <input type="text" name="result_cards[${index}][card_heading]" class="form-control">
                </div>
                <div class="mb-2">
                    <label class="form-label fw-bold">Card Description</label>
                    <textarea name="result_cards[${index}][card_description]" class="form-control" rows="2"></textarea>
                </div>
                <div class="mb-2">
                    <label class="form-label fw-bold">Card Image</label>
                    <input type="file" name="result_cards[${index}][card_image]" class="form-control" accept="image/*">
                </div>
            </div>
        `);
    }
</script>