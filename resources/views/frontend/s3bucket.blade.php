<!DOCTYPE html>
<html>
<head>
    <title>S3 File Upload</title>
</head>
<body>
    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif
    <form action="{{ route('frontend.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="file">Choose a file:</label>
        <input type="file" name="file" required>
        <button type="submit">Upload</button>
    </form>
    <hr>
    <h3>Uploaded Files:</h3>
    <ul>
        @if(!empty($files))
            @foreach ($files as $file)
                <li>
                    <a href="{{ $file['url'] }}" target="_blank">{{ $file['name'] }}</a><br>
                    <img src="{{ $file['url'] }}" alt="{{ $file['name'] }}" style="max-width: 200px; height: auto;"><br>
    
                    <!-- Delete form -->
                    <form action="{{ route('frontend.delete', $file['name']) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this file?')">
                            Delete
                        </button>
                    </form>
    
                    <!-- Optional: Edit form -->
                    <form action="{{ route('frontend.update', $file['name']) }}" method="POST" enctype="multipart/form-data" style="display:inline;">
                        @csrf
                        <input type="file" name="file" required>
                        <button type="submit">Replace</button>
                    </form>
                </li>
            @endforeach
        @else
            <li>No files found.</li>
        @endif
    </ul>
    
    
</body>
</html>
