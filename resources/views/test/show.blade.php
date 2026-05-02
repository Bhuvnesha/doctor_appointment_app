<style>
    /* General page styling */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f7f6;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Container for the content */
.container {
    background: #ffffff;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

/* Heading style */
h1 {
    color: #333;
    border-bottom: 2px solid #007bff;
    padding-bottom: 10px;
    margin-top: 0;
}

/* Paragraph styling */
p {
    color: #555;
    line-height: 1.6;
    margin: 10px 0;
}

/* Emphasizing labels */
p strong {
    color: #222;
}
</style>
<div class="container">
<h1>Show</h1>

<p>Name: {{ $row->name }}</p>
<p>Email: {{ $row->email }}</p>
<p>Comments: {{ $row->comments }}</p>

</div>