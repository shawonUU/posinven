jQuery(function ($) {
	
	// Offcanvs Custom
	$('#offcanvas-toggler-custom').on('click', function (event) {
		event.preventDefault();
		$('.offcanvas-init').addClass('offcanvas-active');
	});	

});

document.addEventListener("DOMContentLoaded", function() {
    // Select all elements with the class "sppb-btn"
    const buttons = document.querySelectorAll('.sppb-btn:not(.optech-portfolio-btn, .sppb-btn-link, .optech-pricing-btn, .hikashop_product_quantity_field_change), .sp-slider-btn-text');

    // Loop through each element
    buttons.forEach(button => {
        // Get the content of the button
        const content = button.textContent.trim();

        // Create a new span element with the class "btn-wrapper"
        const wrapper = document.createElement('span');
        wrapper.className = 'btn-wrapper';
        wrapper.textContent = content;

        // Clear the original button content
        button.textContent = '';

        // Append the wrapper with the original content back to the button
        button.appendChild(wrapper);

        // Set the "data-text" attribute to the original content
        button.setAttribute('data-text', content);
    });
	
	
// Wrap Carousel Image inside a div

const images = document.querySelectorAll('.item-slide img');

images.forEach((image) => {
  const wrapper = document.createElement('div');
  wrapper.classList.add('carousel-image');
  
  image.parentNode.insertBefore(wrapper, image);
  
  wrapper.appendChild(image);
});
});