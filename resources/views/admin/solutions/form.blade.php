@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ isset($solution) ? route('admin.solutions.update', $solution) : route('admin.solutions.store') }}" method="POST" enctype="multipart/form-data" class="container py-4">
    @csrf
    @if(isset($solution))
    @method('PUT')
    @endif

    <div class="d-flex justify-content-end position-fixed top-0 end-0 p-5">
        <button type="submit" class="btn btn-primary btn-lg px-4">{{ isset($solution) ? 'Update' : 'Create' }}</button>
    </div>

    {{-- Solution Title & Slug --}}
    <div class="row g-3 mb-4">
        <div class="col-md-6">
            <label for="title" class="form-label fw-semibold">Solution Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $solution->title ?? '') }}" required>
            @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="col-md-6">
            <label for="slug" class="form-label fw-semibold">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $solution->slug ?? '') }}" required>
            @error('slug')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label fw-bold">Description</label>
        <textarea name="description" id="description" rows="4" class="form-control">{{ old('description', $solution->description ?? '') }}</textarea>
    </div>
    <div class="mb-3">
        <label for="icon" class="form-label fw-bold">Icon (SVG, PNG, JPG, JPEG)</label>
        <input type="file" name="icon" id="icon" class="form-control" accept=".svg,.png,.jpg,.jpeg">
    </div>



    {{-- Hero Section --}}
    <section class="mb-5">
        <h4 class="mb-3 border-bottom pb-2">Hero Section</h4>
        <div class="mb-3">
            <label for="hero_heading" class="form-label fw-semibold">Hero Heading</label>
            <input type="text" class="form-control" id="hero_heading" name="hero_heading" value="{{ old('hero_heading', $solution->hero_heading ?? '') }}">
        </div>
        <div class="mb-3">
            <label for="hero_description" class="form-label fw-semibold">Hero Description</label>
            <textarea class="form-control" id="hero_description" name="hero_description" rows="4">{{ old('hero_description', $solution->hero_description ?? '') }}</textarea>
        </div>
        <div>
            <label for="hero_image" class="form-label fw-semibold">Hero Image</label>
            <input type="file" class="form-control" id="hero_image" name="hero_image" accept="image/*">
            @if(isset($solution) && $solution->hero_image)
            <img src="{{ asset('frontend/img/solutions/' . $solution->hero_image) }}" class="img-thumbnail mt-3" style="max-height: 140px;" alt="Hero Image Preview">
            @endif
        </div>
    </section>

    {{-- Subhero Section --}}
    <section class="mb-5">
        <h4 class="mb-3 border-bottom pb-2">Subhero Section</h4>
        <div class="mb-3">
            <label for="subhero_heading" class="form-label fw-semibold">Subhero Heading</label>
            <input type="text" class="form-control" id="subhero_heading" name="subhero_heading" value="{{ old('subhero_heading', $solution->subhero_heading ?? '') }}">
        </div>
        <div>
            <label for="subhero_description" class="form-label fw-semibold">Subhero Description</label>
            <textarea class="form-control" id="subhero_description" name="subhero_description" rows="4">{{ old('subhero_description', $solution->subhero_description ?? '') }}</textarea>
        </div>
    </section>

    {{-- Solution Cards --}}
    <section class="mb-5">
        <h4 class="mb-3 border-bottom pb-2">Solution Cards</h4>
        <div class="mb-3">
            <label for="solution_cards_heading" class="form-label fw-semibold">Solution Cards Heading</label>
            <input type="text" class="form-control" id="solution_cards_heading" name="solution_cards_heading" value="{{ old('solution_cards_heading', $solution->solution_cards_heading ?? '') }}">
        </div>
        <div id="card-wrapper" class="mb-3">
            @php
            $cards = old('cards', $solution->solutionCards ?? [['card_heading' => '', 'card_description' => '']]);
            @endphp
            @foreach($cards as $i => $card)
            <div class="card mb-3 shadow-sm position-relative p-3">
                <button type="button" class="btn-close position-absolute top-0 end-0 m-2" aria-label="Remove" onclick="removeElement(this)"></button>
                <div class="mb-2">
                    <label class="form-label fw-semibold">Card Heading</label>
                    <input type="text" name="cards[{{ $i }}][card_heading]" class="form-control" placeholder="Card Heading" value="{{ $card['card_heading'] ?? '' }}">
                </div>
                <div>
                    <label class="form-label fw-semibold">Card Description</label>
                    <textarea name="cards[{{ $i }}][card_description]" class="form-control" placeholder="Card Description" rows="2">{{ $card['card_description'] ?? '' }}</textarea>
                </div>
            </div>
            @endforeach
        </div>
        <button type="button" class="btn btn-outline-primary" onclick="addCard()">+ Add Card</button>
    </section>

    {{-- Counter Section --}}
    <section class="mb-5">
        <h4 class="mb-3 border-bottom pb-2">Counters</h4>
        <div class="mb-3">
            <label for="counter_heading" class="form-label fw-semibold">Counter Heading</label>
            <input type="text" class="form-control" id="counter_heading" name="counter_heading" value="{{ old('counter_heading', $solution->counter_heading ?? '') }}">
        </div>
        <div id="counter-wrapper">
            @php
            $counters = old('counters', $solution->solutionCounters ?? [['title' => '', 'number' => '']]);
            @endphp
            @foreach($counters as $i => $counter)
            <div class="row g-3 mb-3 align-items-center border rounded p-3 position-relative shadow-sm">
                <button type="button" class="btn-close position-absolute top-0 end-0 m-2" aria-label="Remove" onclick="removeElement(this)"></button>
                <div class="col-md-8">
                    <label class="form-label fw-semibold">Counter Title</label>
                    <input type="text" name="counters[{{ $i }}][title]" class="form-control" placeholder="Counter Title" value="{{ $counter['title'] ?? '' }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Number</label>
                    <input type="number" name="counters[{{ $i }}][number]" class="form-control" placeholder="Number" value="{{ $counter['number'] ?? '' }}">
                </div>
            </div>
            @endforeach
        </div>
        <button type="button" class="btn btn-outline-primary" onclick="addCounter()">+ Add Counter</button>
    </section>

    {{-- Result Cards --}}
    <section class="mb-5">
        <h4 class="mb-3 border-bottom pb-2">Result Cards</h4>
        <div class="mb-3">
            <label for="result_cards_heading" class="form-label fw-semibold">Result Cards Heading</label>
            <input type="text" class="form-control" id="result_cards_heading" name="result_cards_heading" value="{{ old('result_cards_heading', $solution->result_cards_heading ?? '') }}">
        </div>
        <div id="result-card-wrapper">
            @php
            $resultCards = old('result_cards', $solution->solutionResultCards ?? [['card_heading' => '', 'card_description' => '', 'card_image' => '']]);
            @endphp
            @foreach($resultCards as $i => $resultCard)
            <div class="card mb-3 shadow-sm position-relative p-3">
                <button type="button" class="btn-close position-absolute top-0 end-0 m-2" aria-label="Remove" onclick="removeElement(this)"></button>
                <div class="mb-2">
                    <label class="form-label fw-semibold">Card Heading</label>
                    <input type="text" name="result_cards[{{ $i }}][card_heading]" class="form-control" placeholder="Card Heading" value="{{ $resultCard['card_heading'] ?? '' }}">
                </div>
                <div class="mb-2">
                    <label class="form-label fw-semibold">Card Description</label>
                    <textarea name="result_cards[{{ $i }}][card_description]" class="form-control" placeholder="Card Description" rows="2">{{ $resultCard['card_description'] ?? '' }}</textarea>
                </div>
                <div>
                    <label class="form-label fw-semibold">Card Image</label>
                    <input type="file" name="result_cards[{{ $i }}][card_image]" class="form-control" accept="image/*">
                    @if(isset($solution) && $solution->solutionResultCards && $solution->solutionResultCards->count() > $i)
                    @php $img = $solution->solutionResultCards[$i]->card_image; @endphp
                    @if($img)
                    <img src="{{ asset('frontend/img/solutions/result_cards/' . $img) }}" alt="Result Card Image" class="img-thumbnail mt-3" style="max-height: 140px;">
                    @endif
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        <button type="button" class="btn btn-outline-primary" onclick="addResultCard()">+ Add Result Card</button>
    </section>

    {{-- Services Section --}}
    <section class="mb-5">
        <h4 class="mb-3 border-bottom pb-2">Services</h4>
        <div id="service-wrapper">
            @php
            $services = old('services', $solution->services ?? [['service_heading' => '', 'service_url' => '']]);
            @endphp
            @foreach($services as $i => $service)
            <div class="card mb-3 shadow-sm position-relative p-3">
                <button type="button" class="btn-close position-absolute top-0 end-0 m-2" aria-label="Remove" onclick="removeElement(this)"></button>
                <div class="mb-2">
                    <label class="form-label fw-semibold">Service Name</label>
                    <input type="text" name="services[{{ $i }}][service_heading]" class="form-control" placeholder="Service Name" value="{{ $service['service_heading'] ?? '' }}">
                </div>
                <div>
                    <label class="form-label fw-semibold">Service URL</label>
                    <input type="text" name="services[{{ $i }}][service_url]" class="form-control" placeholder="Service URL" value="{{$service['service_url'] ?? '' }}">
                </div>
            </div>
            @endforeach
        </div>
        <button type="button" class="btn btn-outline-primary" onclick="addService()">+ Add Service</button>
    </section>

    {{-- CTA Section --}}
    <section class="mb-5">
        <h4 class="mb-3 border-bottom pb-2">Call To Action (CTA)</h4>
        <div class="mb-3">
            <label for="cta_title" class="form-label fw-semibold">CTA Title</label>
            <input type="text" class="form-control" id="cta_title" name="cta_title" value="{{ old('cta_title', $solution->cta_title ?? '') }}">
        </div>
        <div class="mb-3">
            <label for="cta_button_text" class="form-label fw-semibold">CTA Button Text</label>
            <input type="text" class="form-control" id="cta_button_text" name="cta_button_text" value="{{ old('cta_button_text', $solution->cta_button_text ?? '') }}">
        </div>
        <div class="mb-3">
            <label for="cta_button_url" class="form-label fw-semibold">CTA Button URL</label>
            <input type="text" class="form-control" id="cta_button_url" name="cta_button_url" value="{{ old('cta_button_url', $solution->cta_button_url ?? '') }}">
        </div>
        <div>
            <label for="cta_image" class="form-label fw-semibold">CTA Image</label>
            <input type="file" class="form-control" id="cta_image" name="cta_image" accept="image/*">
            @if(isset($solution) && $solution->cta_image)
            <img src="{{ asset('frontend/img/solutions/cta_img' . $solution->cta_image) }}" class="img-thumbnail mt-3" style="max-height: 140px;" alt="CTA Image Preview">
            @endif
        </div>
    </section>


</form>

@push('scripts')
<script>
    // Initialize indices from old input or existing solution data counts
    let cardIndex = {{ count(old('cards', $solution->solutionCards ?? [['card_heading' => '', 'card_description' => '']])) }};
    let counterIndex = {{ count(old('counters', $solution->solutionCounters ?? [['title' => '', 'number' => '']])) }};
    let resultCardIndex = {{ count(old('result_cards', $solution->solutionResultCards ?? [['card_heading' => '', 'card_description' => '', 'card_image' => '']])) }};
    let serviceIndex = {{ count(old('services', $solution->services ?? [['name' => '', 'url' => '']])) }};

    // Remove card, counter, result card, or service element
    function removeElement(button) {
        button.closest('.card, .row').remove();
    }

    // Add new Solution Card
    function addCard() {
        const wrapper = document.getElementById('card-wrapper');
        const html = `
        <div class="card mb-3 shadow-sm position-relative p-3">
            <button type="button" class="btn-close position-absolute top-0 end-0 m-2" aria-label="Remove" onclick="removeElement(this)"></button>
            <div class="mb-2">
                <label class="form-label fw-semibold">Card Heading</label>
                <input type="text" name="cards[${cardIndex}][card_heading]" class="form-control" placeholder="Card Heading">
            </div>
            <div>
                <label class="form-label fw-semibold">Card Description</label>
                <textarea name="cards[${cardIndex}][card_description]" class="form-control" placeholder="Card Description" rows="2"></textarea>
            </div>
        </div>`;
        wrapper.insertAdjacentHTML('beforeend', html);
        cardIndex++;
    }

    // Add new Counter
    function addCounter() {
        const wrapper = document.getElementById('counter-wrapper');
        const html = `
        <div class="row g-3 mb-3 align-items-center border rounded p-3 position-relative shadow-sm">
            <button type="button" class="btn-close position-absolute top-0 end-0 m-2" aria-label="Remove" onclick="removeElement(this)"></button>
            <div class="col-md-8">
                <label class="form-label fw-semibold">Counter Title</label>
                <input type="text" name="counters[${counterIndex}][title]" class="form-control" placeholder="Counter Title">
            </div>
            <div class="col-md-4">
                <label class="form-label fw-semibold">Number</label>
                <input type="number" name="counters[${counterIndex}][number]" class="form-control" placeholder="Number">
            </div>
        </div>`;
        wrapper.insertAdjacentHTML('beforeend', html);
        counterIndex++;
    }

    // Add new Result Card
    function addResultCard() {
        const wrapper = document.getElementById('result-card-wrapper');
        const html = `
        <div class="card mb-3 shadow-sm position-relative p-3">
            <button type="button" class="btn-close position-absolute top-0 end-0 m-2" aria-label="Remove" onclick="removeElement(this)"></button>
            <div class="mb-2">
                <label class="form-label fw-semibold">Card Heading</label>
                <input type="text" name="result_cards[${resultCardIndex}][card_heading]" class="form-control" placeholder="Card Heading">
            </div>
            <div class="mb-2">
                <label class="form-label fw-semibold">Card Description</label>
                <textarea name="result_cards[${resultCardIndex}][card_description]" class="form-control" placeholder="Card Description" rows="2"></textarea>
            </div>
            <div>
                <label class="form-label fw-semibold">Card Image</label>
                <input type="file" name="result_cards[${resultCardIndex}][card_image]" class="form-control" accept="image/*">
            </div>
        </div>`;
        wrapper.insertAdjacentHTML('beforeend', html);
        resultCardIndex++;
    }

    // Add new Service
    function addService() {
        const wrapper = document.getElementById('service-wrapper');
        const html = `
        <div class="card mb-3 shadow-sm position-relative p-3">
            <button type="button" class="btn-close position-absolute top-0 end-0 m-2" aria-label="Remove" onclick="removeElement(this)"></button>
            <div class="mb-2">
                <label class="form-label fw-semibold">Service Name</label>
                <input type="text" name="services[${serviceIndex}][service_heading]" class="form-control" placeholder="Service Name">
            </div>
            <div>
                <label class="form-label fw-semibold">Service URL</label>
                <input type="text" name="services[${serviceIndex}][service_url]" class="form-control" placeholder="Service URL">
            </div>
        </div>`;
        wrapper.insertAdjacentHTML('beforeend', html);
        serviceIndex++;
    }
</script>
@endpush
