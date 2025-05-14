<style>
    .extra-brand {
        transition: all 0.3s ease;
        opacity: 0;
    }

    .extra-brand.show {
        opacity: 1;
    }
</style>
<section class="client-section">
    <div class="container card">
        <div class="row">
            <div class="heading-panel">
                <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                    <!-- Main Title -->
                    <h1> <span class="heading-color">Popular</span> Brands</h1>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="well alert-box-container margin-top-20">
                    <div class="row" id="brand-list">
                        @foreach ($brands as $index => $data)
                        <div class="col-md-2 col-sm-2 col-xs-2 brand-item {{ $index >= 12 ? 'd-none extra-brand' : '' }}">
                            <div class="client-logo">
                                <a href="javascript:void(0);" class="{{ $cartype }}" data-value="{{ $data->value }}">
                                    <img src="{{ asset('assets/backend-assets/images/' . $data->iconimage) }}" class="img-responsive" alt="Brand Image" width="150" />
                                </a>
                                <div class="text-center fs-4">{{ $data->value }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- View More / View Less Button -->
                    <div class="text-center mt-3">
                        <button id="toggle-brands" class="btn btn-theme btn-sm rounded-4">View More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Script for Toggle Functionality with Transition -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('toggle-brands');
        const extraBrands = document.querySelectorAll('.extra-brand');
        let isExpanded = false;

        // Apply transition effect to each extra brand item
        extraBrands.forEach(item => {
            item.style.transition = 'all 0.3s ease';
            item.style.opacity = '0'; // Initially hidden
        });

        toggleBtn.addEventListener('click', function() {
            isExpanded = !isExpanded;
            extraBrands.forEach((item, index) => {
                setTimeout(() => {
                    if (isExpanded) {
                        item.classList.remove('d-none');
                        item.style.opacity = '1'; // Fade in
                    } else {
                        item.style.opacity = '0'; // Fade out
                        setTimeout(() => {
                            item.classList.add('d-none');
                        }, 300); // Wait for the transition to complete
                    }
                }, index * 50); // Staggered effect for a smoother reveal
            });
            toggleBtn.textContent = isExpanded ? 'View Less' : 'View More';
        });
    });

</script>
