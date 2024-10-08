<style>
    .searchBox {
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative; /* Ensure button position is relative to this container */
        width: 50%; /* Adjust width as needed */
        max-width: 600px; /* Optional: Set a max-width */
        margin: 20px auto; /* Center the container horizontally and add margin */
    }

    .searchInput {
        border-radius: 20px;
        border: none;
        outline: none;
        background: white;
        color: darkgreen;
        font-size: 15px;
        padding: 4px 12px;
        width: 100%; /* Make input fill the available space */
        height: 40px;
    }

    .searchButton {
        width: 36px;
        height: 36px;
        color: white;
        position: absolute;
        right: 10px; /* Adjust position from the right edge */
        background: var(--gradient-2, linear-gradient(90deg, #2AF598 0%, #009EFD 100%));
        border: 0;
        border-radius: 50%;
        padding: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
    }

    /* Hover effect */
    .searchButton:hover {
        background-color: #1A1A1A;
        box-shadow: rgba(0, 0, 0, 0.5) 0 10px 20px;
        transform: translateY(-3px);
    }

    /* Button pressing effect */
    .searchButton:active {
        box-shadow: none;
        transform: translateY(0);
    }
</style>

<div class="searchBox">
    <input class="searchInput shadow-md" type="text" name="" placeholder="search...">
    <button class="searchButton">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 29 29" fill="none">
            <g clip-path="url(#clip0_2_17)">
                <g filter="url(#filter0_d_2_17)">
                    <path d="M23.7953 23.9182L19.0585 19.1814M19.0585 19.1814C19.8188 18.4211 20.4219 17.5185 20.8333 16.5251C21.2448 15.5318 21.4566 14.4671 21.4566 13.3919C21.4566 12.3167 21.2448 11.252 20.8333 10.2587C20.4219 9.2653 19.8188 8.36271 19.0585 7.60242C18.2982 6.84214 17.3956 6.23905 16.4022 5.82759C15.4089 5.41612 14.3442 5.20435 13.269 5.20435C12.1938 5.20435 11.1291 5.41612 10.1358 5.82759C9.1424 6.23905 8.23981 6.84214 7.47953 7.60242C5.94407 9.13789 5.08145 11.2204 5.08145 13.3919C5.08145 15.5634 5.94407 17.6459 7.47953 19.1814C9.01499 20.7168 11.0975 21.5794 13.269 21.5794C15.4405 21.5794 17.523 20.7168 19.0585 19.1814Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" shape-rendering="crispEdges"></path>
                </g>
            </g>
            <defs>
                <filter id="filter0_d_2_17" x="-0.418549" y="3.70435" width="29.7139" height="29.7139" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                    <feOffset dy="4"></feOffset>
                    <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_17"></feBlend>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_17" result="shape"></feBlend>
                </filter>
                <clipPath id="clip0_2_17">
                    <rect width="28.0702" height="28.0702" fill="white" transform="translate(0.403503 0.526367)"></rect>
                </clipPath>
            </defs>
        </svg>
    </button>
</div>