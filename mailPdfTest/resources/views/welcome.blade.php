<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container-fluid p-5 bg-danger text-white text-center" style="opacity:0.9">
        <h2>Mail & Pdf Tester</h2>
        <h6>
            <blockquote>
                For multiple emails use Comma: ',' <br>
                Ex. ahsan@flightexpert.com, hossen@flightexpert.com, rafid@fligtexpert.com
            </blockquote>
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <blockquote>
                        {!! \Session::get('success') !!}
                    </blockquote>
                </div>
            @endif
            @if (\Session::has('error'))
                <div class="alert alert-warning">
                    <blockquote>
                        {!! \Session::get('error') !!}
                    </blockquote>
                </div>
            @endif
        </h6>
    </div>

    <form action="{{ route('send-mail') }}" method="post">
        @csrf
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="form-group my-1">
                        <label class="my-2" for="email">Emails<span class="text-danger">*</span></label>
                        <textarea type="text" name="email" id="email" cols="30" class="form-control"
                            placeholder="For multiple emails use ','. Ex. ahsan@flightexpert.com, hossen@flightexpert.com, rafid@fligtexpert.com"
                            required> </textarea>
                    </div>
                    <div class="form-group my-1">
                        <label class="my-2" for="cc">CC:</label>
                        <textarea type="text" name="cc" id="cc" cols="30" class="form-control"> </textarea>
                    </div>
                    <div class="form-group my-1">
                        <label class="my-2" for="bcc">BCC:</label>
                        <textarea type="text" name="bcc" id="bcc" cols="30" class="form-control"> </textarea>
                    </div>
                    <div class="form-check my-2">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="pdf">
                            Attatch Pdf
                        </label>
                    </div>
                    <div class="" style="text-align: right;">
                        <button type="submit" name="send_mail" class="btn btn-sm btn-primary">Send Mail</button>
                        <button type="submit" name="download_pdf" value="1" class="btn btn-sm btn-danger">Download Pdf</button>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="form-group my-1">
                        <label class="my-2" for="email">Html Code<span class="text-danger">*</span></label>
                        <textarea type="text" name="details" id="email" cols="30" rows="11" class="form-control"
                            placeholder="Put Your Html code here" required><!DOCTYPE html><html><head><style>table{font-family: arial, sans-serif; border-collapse: collapse; width: 100%;}td, th{border: 1px solid #dddddd; text-align: left; padding: 8px;}tr:nth-child(even){background-color: #dddddd;}</style></head><body><h2>HTML Table</h2><table> <tr> <th>Company</th> <th>Contact</th> <th>Country</th> </tr><tr> <td>Alfreds Futterkiste</td><td>Maria Anders</td><td>Germany</td></tr><tr> <td>Centro comercial Moctezuma</td><td>Francisco Chang</td><td>Mexico</td></tr><tr> <td>Ernst Handel</td><td>Roland Mendel</td><td>Austria</td></tr><tr> <td>Island Trading</td><td>Helen Bennett</td><td>UK</td></tr><tr> <td>Laughing Bacchus Winecellars</td><td>Yoshi Tannamuri</td><td>Canada</td></tr><tr> <td>Magazzini Alimentari Riuniti</td><td>Giovanni Rovelli</td><td>Italy</td></tr></table></body></html></textarea>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
@vite(['resources/css/app.css', 'resources/js/app.js'])
