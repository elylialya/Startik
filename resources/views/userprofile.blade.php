
<form method="POST" enctype="multipart/form-data" action="">

<div class="text">
        <h1>User Profile</h1>
    </div>
 <div class="container">
<div class="foto">
    <img src="asset/img.jpeg" alt="" class="img"><br>
</div>
    <div class="content">
        <div class="input">
            <label for="nama">Nama:</label>
            <input type="text" value="{{ auth()->user()->name }}" class="nama"><br>
            <label for="nama">Phone:</label>
            <input type="text" class="phone"><br>
            <label for="nama">Email:</label>
            <input type="email" value="{{ auth()->user()->email }}"  class="email"><br>
            <button type="submit" class="btn btn-block">Save Profile</button>
        </div>
    </div>

    </div>

    
</form>
