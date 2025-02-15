<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Hover with Booking</title>
</head>
<body>
    <div style="position: relative; width: 300px; height: 200px; margin: 20px; overflow: hidden; border: 2px solid #ddd; border-radius: 8px;">
        <!-- Photo -->
        <img 
            src="images/301.jpg" 
            alt="Sample Photo" 
            style="width: 100%; height: 100%; object-fit: cover; display: block;"
        >
        <!-- Hover Effect -->
        <div 
            style="
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.6);
                color: white;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                opacity: 0;
                transition: opacity 0.3s ease-in-out;
            "
            onmouseover="this.style.opacity='1'"
            onmouseout="this.style.opacity='0'"
        ><h3>live</h3>
            <!-- Booking Button -->
            <button 
                onclick="alert('abcdefg')"
                style="
                    background-color: #25d366;
                    color: white;
                    padding: 10px 20px ;
                    border: none;
                    border-radius: 5px;
                    font-size: 16px;
                    cursor: pointer;
                    margin: 50px;
                "
            >
            
                Booking
            </button>
        </div>
    </div>
</body>
</html>
