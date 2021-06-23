<style>
    /* body */
    body {
        width: 100%;
        min-height: 100vh;

        /*display: flex;*/
        /*justify-content: center;*/
        /*align-items: center;*/

        margin: 0;
        padding: 0;

        font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, sans-serif;
    }


    /* section */
    section {
        width: 50%;
        min-height: inherit;

        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;

        position: relative;
    }

    section::before,
    section::after {
        content: "";
        display: block;

        border-radius: 100%;

        position: absolute;
    }

    section::before {
        width: 30px;
        height: 30px;

        background: var(--primary);
        clip-path: polygon(0 100%, 100% 0, 100% 100%);

        top: 18px;
        left: 18px;
    }

    section::after {
        width: 42px;
        height: 42px;

        border: 1px solid var(--primary);

        top: 11px;
        left: 11px;
    }

    .light {
        --primary: hsl(250, 100%, 44%);
        --other: hsl(0, 0%, 14%);

        background: hsl(0, 0%, 98%);
    }

    .dark {
        --primary: hsl(1, 100%, 68%);
        --other: hsl(0, 0%, 90%);

        background: hsl(0, 0%, 10%);
    }


    /* h1 */
    h1 {
        color: var(--other);
        padding: 8px 4px;
        border-bottom: 2px solid var(--other);
    }


    /* label */
    label {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        flex-wrap: nowrap;

        margin: 12px 0;

        cursor: pointer;
        position: relative;
    }


    /* input */
    input {
        opacity: 0;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        z-index: -1;
    }


    /* .design */
    .design {
        width: 16px;
        height: 16px;

        border: 1px solid var(--other);
        border-radius: 100%;
        margin-right: 16px;

        position: relative;
    }

    .design::before,
    .design::after {
        content: "";
        display: block;

        width: inherit;
        height: inherit;

        border-radius: inherit;

        position: absolute;
        transform: scale(0);
        transform-origin: center center;
    }

    .design:before {
        background: var(--other);
        opacity: 0;
        transition: .3s;
    }

    .design::after {
        background: var(--primary);
        opacity: .4;
        transition: .6s;
    }


    /* .text */
    .text {
        color: var(--other);
        font-weight: bold;
    }


    /* checked state */
    input:checked+.design::before {
        opacity: 1;
        transform: scale(.6);
    }


    /* other states */
    input:hover+.design,
    input:focus+.design {
        border: 1px solid var(--primary);
    }

    input:hover+.design:before,
    input:focus+.design:before {
        background: var(--primary);
    }

    input:hover~.text {
        color: var(--primary);
    }

    input:focus+.design::after,
    input:active+.design::after {
        opacity: .1;
        transform: scale(2.6);
    }

    .abs-site-link {
        position: fixed;
        bottom: 20px;
        left: 20px;
        color: hsla(0, 0%, 0%, .6);
        background: hsla(0, 0%, 98%, .6);
        font-size: 16px;
    }

</style>
<body>
<form action="{{route('test')}}">
<section class="light">

    <h1>(Light) Radio</h1>

    <label>
        <input type="radio" name="light" value="123" checked>
        <span class="design"></span>
        <span class="text">Option 1</span>
    </label>

    <label>
        <input type="radio" name="light">
        <span class="design"></span>
        <span class="text">Option 2</span>
    </label>

    <label>
        <input type="radio" name="light">
        <span class="design"></span>
        <span class="text">Option 3</span>
    </label>

</section>
<section class="light">

    <h1>(Light) Radio</h1>

    <label>
        <input type="radio" name="light1" checked>
        <span class="design"></span>
        <span class="text">Option 1</span>
    </label>

    <label>
        <input type="radio" name="light1">
        <span class="design"></span>
        <span class="text">Option 2</span>
    </label>

    <label>
        <input type="radio" name="light1">
        <span class="design"></span>
        <span class="text">Option 3</span>
    </label>

</section>
<section class="light">

    <h1>(Light) Radio</h1>

    <label>
        <input type="radio" name="light2" checked>
        <span class="design"></span>
        <span class="text">Option 1</span>
    </label>

    <label>
        <input type="radio" name="light2">
        <span class="design"></span>
        <span class="text">Option 2</span>
    </label>

    <label>
        <input type="radio" name="light2">
        <span class="design"></span>
        <span class="text">Option 3</span>
    </label>

</section>


<section class="dark">

    <h1>Buttons (Dark)</h1>

    <label>
        <input type="radio" name="dark" checked>
        <span class="design"></span>
        <span class="text">Option 1</span>
    </label>

    <label>
        <input type="radio" name="dark">
        <span class="design"></span>
        <span class="text">Option 2</span>
    </label>

    <label>
        <input type="radio" name="dark">
        <span class="design"></span>
        <span class="text">Option 3</span>
    </label>

</section>
<section class="dark">

    <h1>Buttons (Dark)</h1>

    <label>
        <input type="radio" name="dar" checked>
        <span class="design"></span>
        <span class="text">Option 1</span>
    </label>

    <label>
        <input type="radio" name="dar">
        <span class="design"></span>
        <span class="text">Option 2</span>
    </label>

    <label>
        <input type="radio" name="dar">
        <span class="design"></span>
        <span class="text">Option 3</span>
    </label>

</section>
    <input type="submit" placeholder="ОТПРАВИТЬ">
</form>
</body>
