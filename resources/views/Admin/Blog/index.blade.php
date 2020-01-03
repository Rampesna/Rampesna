@extends('Admin.main')

@section('custom-header')
    <link rel="stylesheet" href="{{asset('Admin\vendor\datatables\css\dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin\vendor\datatables\css\buttons.dataTables.min.css')}}">
@endsection

@section('page-title')
    Blog
@endsection
{{-----------------------------------------------}}
@section('main')

    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
            <div class="row block">
                <table id="blogDatatable" style="width: 100%;" class="table table-sm">
                    <thead>
                    <tr>
                        <th>Başlık</th>
                        <th>Düzenle</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allPosts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td>
                            <a class="fa fa-edit" href="#"
                               style="text-decoration: none;"></a>
                            <a class="fa fa-trash" href="#"
                               style="text-decoration: none;"></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
{{-----------------------------------------------}}
@section('custom-footer')
    <script src="{{asset('Admin\vendor\datatables\js\jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('Admin\vendor\datatables\js\dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="{{asset('Admin\js\tables-datatable.js')}}"></script>

    <script>
        $('#blogDatatable').DataTable({
            language: {
                info: "_TOTAL_ Kayıttan _START_ - _END_ Arasındaki Kayıtlar Gösteriliyor.",
                infoEmpty: "Gösterilecek Hiç Kayıt Yok.",
                loadingRecords: "Kayıtlar yükleniyor.",
                zeroRecords: "Tablo Boş",
                search: "Arama:",
                infoFiltered: "(Toplam _MAX_ Kayıttan İçerisinden Filtrelenenler)",
                /*
                buttons: {
                    copyTitle: "Panoya Kopyalandı.",
                    copySuccess:"Panoya %d Satır Kopyalandı",
                    copy: "Kopyala",
                    print: "Yazdır",
                },
    */
                paginate: {
                    first: "İlk",
                    previous: "Önceki",
                    next: "Sonraki",
                    last: "Son"
                },
                "sLengthMenu": "_MENU_ &nbsp;Adet Göster"
            },
            dom: 'Bfrtipl',
            lengthMenu: [
                [20, 30, 50, 100, -1],
                ['20', '30', '50', '100', 'Hepsini Göster']
            ],
            buttons: [
                'copy', 'excel', 'pdf', 'print'
            ],
            "order": [[0, "desc"]],
            responsive: true
        });
    </script>
@endsection
