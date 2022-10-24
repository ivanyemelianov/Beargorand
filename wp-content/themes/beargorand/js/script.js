// Grab the button:
const btn = document.querySelector('p.site-title a')

// Detect on hover event:
btn.onmouseover = e => {
    
    // Get the buttons color value, parseInt makes sure its INT:
    let color_value = parseInt(btn.getAttribute('data-colorvalue'))
    
    // Make the R value based on color_value:
    val_r = Math.round((255 * color_value) / 100)
    
    // Make the G value based on color_value:
    val_g = Math.round((255 * (100 - color_value)) / 100)
    
    // Make the B value based on color_value:
    val_b = Math.round(255 - (color_value * 1.5))
    
    // Format and set as buttons background:
    btn.style.color = 'rgb(' + val_r + ', ' + val_g + ', ' + val_b + ')'
    
    // Set the new color value plus 10.. you can play with this formula:
    btn.setAttribute('data-colorvalue', color_value + 10)
}