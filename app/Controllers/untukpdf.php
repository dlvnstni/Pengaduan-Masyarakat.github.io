$htmlData .='<p>
		<a href="/laporan/download-excel/'.$this->request->getPost('txtTglPengaduan').'" class="btn btn-success btn-sm mr-2">Export Ke Excel</a>
		<a href="/laporan/download-pdf/'.$this->request->getPost('txtTglPengaduan').'" class="btn btn-danger btn-sm">Export Ke PDF</a>
		</p>';			
		echo $htmlData;	