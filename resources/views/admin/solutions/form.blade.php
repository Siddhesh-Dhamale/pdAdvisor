<form action="{{ isset($solution) ? route('admin.solutions.update', $solution) : route('admin.solutions.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($solution))
    @method('PUT')
    @endif

    {{-- Solution Title --}}
    <div class="mb-4">
        <label for="title" class="form-label fw-bold">Solution Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $solution->title ?? '') }}" required>
        @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    {{-- Slug --}}
    <div class="mb-4">
        <label for="slug" class="form-label fw-bold">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $solution->slug ?? '') }}" required>
        @error('slug')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    {{-- Hero Section --}}
    <h5 class="mb-3 fw-bold">Hero Section</h5>
    <div class="mb-3">
        <label for="hero_heading" class="form-label fw-bold">Hero Heading</label>
        <input type="text" class="form-control" id="hero_heading" name="hero_heading" value="{{ old('hero_heading', $solution->hero_heading ?? '') }}">
    </div>
    <div class="mb-3">
        <label for="hero_description" class="form-label fw-bold">Hero Description</label>
        <textarea class="form-control" id="hero_description" name="hero_description" rows="3">{{ old('hero_description', $solution->hero_description ?? '') }}</textarea>
    </div>
    <div class="mb-4">
        <label for="hero_image" class="form-label fw-bold">Hero Image</label>
        <input type="file" class="form-control" id="hero_image" name="hero_image" accept="image/*">
        @if(isset($solution) && $solution->hero_image)
        <img src="{{ asset('storage/' . $solution->hero_image) }}" class="img-thumbnail mt-2" style="max-height: 120px;">
        @endif
    </div>

    {{-- Subhero Section --}}
    <h5 class="mb-3 fw-bold">Subhero Section</h5>
    <div class="mb-3">
        <label for="subhero_heading" class="form-label fw-bold">Subhero Heading</label>
        <input type="text" class="form-control" id="subhero_heading" name="subhero_heading" value="{{ old('subhero_heading', $solution->subhero_heading ?? '') }}">
    </div>
    <div class="mb-4">
        <label for="subhero_description" class="form-label fw-bold">Subhero Description</label>
        <textarea class="form-control" id="subhero_description" name="subhero_description" rows="3">{{ old('subhero_description', $solution->subhero_description ?? '') }}</textarea>
    </div>

    {{-- Solution Cards --}}
    <h5 class="mb-3 fw-bold">Solution Cards</h5>
    <div class="mb-3">
        <label for="solution_cards_heading" class="form-label fw-bold">Solution Cards Heading</label>
        <input type="text" class="form-control" id="solution_cards_heading" name="solution_cards_heading" value="{{ old('solution_cards_heading', $solution->solution_cards_heading ?? '') }}">
    </div>
    <div id="card-wrapper" class="mb-4">
        @php
        $cards = old('cards', $solution->solutionCards ?? [ ['card_heading'=>'','card_description'=>''] ]);
        @endphp
        @foreach($cards as $i => $card)
        <div class="card mb-3 p-3 border">
            <div class="mb-2">
                <label class="form-label fw-bold">Card Heading</label>
                <input type="text" name="cards[{{ $i }}][card_heading]" class="form-control" placeholder="Card Heading" value="{{ $card['card_heading'] ?? '' }}">
            </div>
            <div>
                <label class="form-label fw-bold">Card Description</label>
                <textarea name="cards[{{ $i }}][card_description]" class="form-control" placeholder="Card Description" rows="2">{{ $card['card_description'] ?? '' }}</textarea>
            </div>
        </div>
        @endforeach
    </div>
    <button type="button" class="btn btn-secondary mb-4" onclick="addCard()">+ Add Card</button>

    {{-- Counter Section --}}
    <h5 class="mb-3 fw-bold">Counters</h5>
    <div class="mb-3">
        <label for="counter_heading" class="form-label fw-bold">Counter Heading</label>
        <input type="text" class="form-control" id="counter_heading" name="counter_heading" value="{{ old('counter_heading', $solution->counter_heading ?? '') }}">
    </div>
    <div id="counter-wrapper" class="mb-4">
        @php
        $counters = old('counters', $solution->solutionCounters ?? [ ['title'=>'','number'=>''] ]);
        @endphp
        @foreach($counters as $i => $counter)
        <div class="row g-2 mb-3 align-items-center border rounded p-3">
            <div class="col-md-8">
                <label class="form-label fw-bold">Counter Title</label>
                <input type="text" name="counters[{{ $i }}][title]" class="form-control" placeholder="Counter Title" value="{{ $counter['title'] ?? '' }}">
            </div>
            <div class="col-md-4">
                <label class="form-label fw-bold">Number</label>
                <input type="number" name="counters[{{ $i }}][number]" class="form-control" placeholder="Number" value="{{ $counter['number'] ?? '' }}">
            </div>
        </div>
        @endforeach
    </div>
    <button type="button" class="btn btn-secondary mb-4" onclick="addCounter()">+ Add Counter</button>

    {{-- Result Cards --}}
    <h5 class="mb-3 fw-bold">Result Cards</h5>
    <div class="mb-3">
        <label for="result_cards_heading" class="form-label fw-bold">Result Cards Heading</label>
        <input type="text" class="form-control" id="result_cards_heading" name="result_cards_heading" value="{{ old('result_cards_heading', $solution->result_cards_heading ?? '') }}">
    </div>

    <div id="result-card-wrapper" class="mb-4">
        @php
        $resultCards = old('result_cards', $solution->solutionResultCards ?? [ ['card_heading'=>'','card_description'=>'','card_image'=>''] ]);
        @endphp
        @foreach($resultCards as $i => $resultCard)
        <div class="card mb-3 p-3 border">
            <div class="mb-2">
                <label class="form-label fw-bold">Card Heading</label>
                <input type="text" name="result_cards[{{ $i }}][card_heading]" class="form-control" placeholder="Card Heading" value="{{ $resultCard['card_heading'] ?? '' }}">
            </div>
            <div class="mb-2">
                <label class="form-label fw-bold">Card Description</label>
                <textarea name="result_cards[{{ $i }}][card_description]" class="form-control" placeholder="Card Description" rows="2">{{ $resultCard['card_description'] ?? '' }}</textarea>
            </div>
            <div>
                <label class="form-label fw-bold">Card Image</label>
                <input type="file" name="result_cards[{{ $i }}][card_image]" class="form-control" accept="image/*">
                @if(isset($solution) && $solution->solutionResultCards && $solution->solutionResultCards->count() > $i)
                @php
                $img = $solution->solutionResultCards[$i]->card_image;
                @endphp
                @if($img)
                <img src="{{ asset('storage/' . $img) }}" alt="Result Card Image" class="img-thumbnail mt-2" style="max-height: 120px;">
                @endif
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
        <input type="text" class="form-control" id="cta_title" name="cta_title" value="{{ old('cta_title', $solution->cta_title ?? '') }}">
    </div>

    <div class="mb-4">
        <label for="cta_image" class="form-label fw-bold">CTA Image</label>
        <input type="file" class="form-control" id="cta_image" name="cta_image" accept="image/*">
        @if(isset($solution) && $solution->cta_image)
        <img src="{{ asset('storage/' . $solution->cta_image) }}" class="img-thumbnail mt-2" style="max-height: 120px;">
        @endif
    </div>

    <button type="submit" class="btn btn-primary">{{ isset($solution) ? 'Update' : 'Create' }}</button>
</form>

@push('scripts')
<script>
    let counterIndex = {
        {
            json_encode(count(old('counters', $solution - > solutionCounters ?? [])))
        }
    };
    let cardIndex = {
        {
            json_encode(count(old('cards', $solution - > solutionCards ?? [])))
        }
    };
    let resultCardIndex = {
        {
            json_encode(count(old('result_cards', $solution - > solutionResultCards ?? [])))
        }
    };

    function addCounter() {
        const wrapper = document.getElementById('counter-wrapper');
        const html = `
        <div class="row g-2 mb-3 align-items-center border rounded p-3">
            <div class="col-md-8">
                <label class="form-label fw-bold">Counter Title</label>
                <input type="text" name="counters[${counterIndex}][title]" class="form-control" placeholder="Counter Title">
            </div>
            <div class="col-md-4">
                <label class="form-label fw-bold">Number</label>
                <input type="number" name="counters[${counterIndex}][number]" class="form-control" placeholder="Number">
            </div>
        </div>`;
        wrapper.insertAdjacentHTML('beforeend', html);
        counterIndex++;
    }

    function addCard() {
        const wrapper = document.getElementById('card-wrapper');
        const html = `
        <div class="card mb-3 p-3 border">
            <div class="mb-2">
                <label class="form-label fw-bold">Card Heading</label>
                <input type="text" name="cards[${cardIndex}][card_heading]" class="form-control" placeholder="Card Heading">
            </div>
            <div>
                <label class="form-label fw-bold">Card Description</label>
                <textarea name="cards[${cardIndex}][card_description]" class="form-control" placeholder="Card Description" rows="2"></textarea>
            </div>
        </div>`;
        wrapper.insertAdjacentHTML('beforeend', html);
        cardIndex++;
    }

    function addResultCard() {
        const wrapper = document.getElementById('result-card-wrapper');
        const html = `
        <div class="card mb-3 p-3 border">
            <div class="mb-2">
                <label class="form-label fw-bold">Card Heading</label>
                <input type="text" name="result_cards[${resultCardIndex}][card_heading]" class="form-control" placeholder="Card Heading">
            </div>
            <div class="mb-2">
                <label class="form-label fw-bold">Card Description</label>
                <textarea name="result_cards[${resultCardIndex}][card_description]" class="form-control" placeholder="Card Description" rows="2"></textarea>
            </div>
            <div>
                <label class="form-label fw-bold">Card Image</label>
                <input type="file" name="result_cards[${resultCardIndex}][card_image]" class="form-control" accept="image/*">
            </div>
        </div>`;
        wrapper.insertAdjacentHTML('beforeend', html);
        resultCardIndex++;
    }
</script>
@endpush