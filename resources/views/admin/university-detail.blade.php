<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Orjinmay Admin Dashboard</title>
        <!-- Styles -->
        @include('admin.partials.styles')
        <style>
            .section-separator {
                border: 2;
                height: 1px;
                background: linear-gradient(to right, #605DFF, #605DFF, #605DFF);
                margin: 20px 0;
            }
        </style>
    </head>
    <body class="boxed-size">
        @include('admin.partials.preloader')
        @include('admin.partials.sidebar')

        <div class="container-fluid">
			<div class="main-content d-flex flex-column">
				<!-- Start Header Area -->
				@include('admin.partials.header')
				<!-- End Header Area -->

				<div class="main-content-container overflow-hidden">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
                        <h3 class="mb-0">Edit University</h3>

                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb align-items-center mb-0 lh-1">
                                <li class="breadcrumb-item">
                                    <a href="#" class="d-flex align-items-center text-decoration-none">
                                        <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                                        <span class="text-secondary fw-medium hover">Dashboard</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span class="fw-medium">Universities</span>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span class="fw-medium">Edit</span>
                                </li>
                            </ol>
                        </nav>
                    </div>

                    <div class="row">
                        <div class="col-xxl-12 col-lg-12">
                            <div class="card bg-white border-0 rounded-3 mb-4">
                                <div class="card-body p-4">
                                    <h3 class="mb-3 mb-lg-4">{{ $university->name }}</h3>
                                    <form id="university-form" method="POST" action="{{ route('admin.university.turkey.update', $university->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="accordion" id="universitySections">
                                            @foreach($university->sections as $section)
                                                <div class="accordion-item border mb-3">
                                                    <h2 class="accordion-header" id="heading-{{ $section->id }}">
                                                        <button class="accordion-button @if(!$loop->first) collapsed @endif" type="button" 
                                                                data-bs-toggle="collapse" 
                                                                data-bs-target="#collapse-{{ $section->id }}" 
                                                                aria-expanded="{{ $loop->first ? 'true' : 'false' }}" 
                                                                aria-controls="collapse-{{ $section->id }}">
                                                            {{ $section->section_title ? $section->section_title : 'Section #'.$loop->iteration }}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse-{{ $section->id }}" 
                                                         class="accordion-collapse collapse @if($loop->first) show @endif" 
                                                         aria-labelledby="heading-{{ $section->id }}" 
                                                         data-bs-parent="#universitySections">
                                                        <div class="accordion-body">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-sm-6">
                                                                    <div class="form-group mb-4">
                                                                        <label class="label text-secondary">Section Title</label>
                                                                        <input type="text" class="form-control h-55" name="sections[{{ $section->id }}][section_title]" value="{{ $section->section_title }}">
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-lg-12">
                                                                    <div class="form-group mb-4">
                                                                        <label class="label text-secondary fs-14">Section Description</label>
                                                                        <div id="standalone-container">
                                                                            <div id="editor-container-{{ $section->id }}" style="height: 250px; border-color: #D5D9E2;" class="rounded-bottom-2">
                                                                            </div>
                                                                            <input type="hidden" id="description-{{ $section->id }}" name="description[{{ $section->id }}]" value="{{ $section->descriptions->first()->content ?? '' }}">
                                                                        </div>
                                                                        
                                                                        <!-- List Items Section -->
                                                                        <div class="mt-4">
                                                                            <label class="label text-secondary">List Items</label>
                                                                            <div id="list-container-{{ $section->id }}">
                                                                                <ul class="list-unstyled">
                                                                                    @if(!empty($section->list_items))
                                                                                        @foreach($section->list_items as $index => $item)
                                                                                            <li class="d-flex align-items-center gap-2 mb-2">
                                                                                                <input type="text" 
                                                                                                       name="sections[{{ $section->id }}][lists][{{ $index }}]" 
                                                                                                       class="form-control" 
                                                                                                       value="{{ $item }}" 
                                                                                                       placeholder="List item">
                                                                                                <button type="button" 
                                                                                                        class="btn btn-sm btn-danger" 
                                                                                                        onclick="removeListItem(this)">
                                                                                                    <i class="ri-delete-bin-line"></i>
                                                                                                </button>
                                                                                            </li>
                                                                                        @endforeach
                                                                                    @endif
                                                                                </ul>
                                                                            </div>
                                                                            <button type="button" 
                                                                                    class="btn btn-sm btn-primary mt-2" 
                                                                                    onclick="addListItem({{ $section->id }})">
                                                                                <i class="ri-add-line"></i> Add List Item
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <!-- Section Images -->
                                                                <div class="col-lg-12">
                                                                    <div class="form-group mb-4">
                                                                        <label class="label text-secondary">Section Images</label>
                                                                        <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                                                                            <div class="product-upload">
                                                                                <label for="file-upload-{{ $section->id }}" class="file-upload mb-0">
                                                                                    <i class="ri-folder-image-line bg-primary bg-opacity-10 p-2 rounded-1 text-primary"></i>
                                                                                    <span class="d-block text-body fs-14">Drag and drop an image or <span class="text-primary text-decoration-underline">Browse</span></span>
                                                                                </label>
                                                                                <input id="file-upload-{{ $section->id }}" name="section_images[{{ $section->id }}][]" type="file" multiple>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <!-- Section Images Preview (if any) -->
                                                                @if($section->images && $section->images->count() > 0)
                                                                <div class="section-images-preview mt-3 mb-4">
                                                                    <label class="label text-secondary">Current Images</label>
                                                                    <div class="row">
                                                                        @foreach($section->images as $image)
                                                                        <div class="col-md-3 col-sm-4 col-6 mb-3">
                                                                            <div class="position-relative">
                                                                                <img src="{{ asset( $image['url']) }}" 
                                                                                    class="img-fluid rounded border" 
                                                                                    alt="Section image">
                                                                                <button type="button" 
                                                                                        class="btn btn-sm btn-danger position-absolute top-0 end-0 m-1"
                                                                                        onclick="removeImage(this, '{{ $image['id'] }}')">
                                                                                    <i class="ri-delete-bin-line"></i>
                                                                                </button>
                                                                                <input type="hidden" 
                                                                                    name="remove_images[]" 
                                                                                    id="remove-image-{{ $image['id'] }}" 
                                                                                    value="">
                                                                            </div>
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                                @endif
                                                                </div>
                                                                
                                                                <!-- Section Save Button -->
                                                                <div class="col-lg-12 mt-4">
                                                                    <div class="d-flex justify-content-end">
                                                                        <button type="button" 
                                                                                class="btn btn-primary py-2 px-4 fw-medium"
                                                                                onclick="saveSection({{ $section->id }})">
                                                                            <i class="ri-save-line text-white fw-medium me-1"></i> 
                                                                            Save This Section
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        
                                        <!-- Form buttons -->
                                        <div class="col-lg-12 mt-4">
                                            <div class="d-flex flex-wrap gap-3">
                                                <button type="button" onclick="window.history.back()" class="btn btn-danger py-2 px-4 fw-medium fs-16 text-white">
                                                    <i class="ri-arrow-left-line me-1"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-success py-2 px-4 fw-medium fs-16">
                                                    <i class="ri-save-line text-white fw-medium me-1"></i> Save All Changes
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

				<div class="flex-grow-1"></div>

				<!-- Start Footer Area -->
				@include('admin.partials.footer')
				<!-- End Footer Area -->
			</div>
		</div>

        
        @include('admin.partials.theme_settings')
        @include('admin.partials.scripts')


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Accordion açıldığında Quill editörü düzgün görüntülensin
                const accordionButtons = document.querySelectorAll('.accordion-button');
                accordionButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        setTimeout(() => {
                            window.dispatchEvent(new Event('resize'));
                        }, 300);
                    });
                });
                
                // Her section için Quill editörünü başlat
                @foreach($university->sections as $section)
                    // Quill editörü oluştur
                    var quill = new Quill('#editor-container-{{ $section->id }}', {
                        theme: 'snow',
                        modules: {
                            toolbar: [
                                ['bold', 'italic', 'underline'],
                                ['link', 'blockquote'],
                                [{ 'list': 'ordered'}, { 'list': 'bullet' }]
                            ]
                        }
                    });

                    // Hidden input'tan mevcut içeriği al
                    var hiddenInput = document.querySelector('#description-{{ $section->id }}');
                    var existingContent = hiddenInput.value;
                    
                    // Mevcut içeriği Quill editörüne yükle
                    if (existingContent) {
                        quill.root.innerHTML = existingContent;
                    }

                    // Quill içeriğindeki değişiklikleri dinle
                    quill.on('text-change', function() {
                        // Editör içeriğini al
                        var content = quill.root.innerHTML;
                        
                        // İçeriği hidden input'a kaydet
                        hiddenInput.value = content;
                        
                        // Debug için konsola yaz
                        console.log('Section {{ $section->id }} content updated:', content);
                    });

                @endforeach
                // Dosya yükleme alanları için ön izleme
                const fileInputs = document.querySelectorAll('input[type="file"]');
                fileInputs.forEach(input => {
                    input.addEventListener('change', function(e) {
                        const files = e.target.files;
                        if (!files.length) return;
                        
                        const sectionId = this.id.split('-').pop();
                        
                        // Eski önizleme varsa kaldır
                        const parentContainer = this.closest('.form-group');
                        const existingPreview = parentContainer.querySelector('.file-preview-container');
                        if (existingPreview) {
                            existingPreview.remove();
                        }
                        
                        // Yeni önizleme container'ı oluştur
                        const previewContainer = document.createElement('div');
                        previewContainer.className = 'mt-3 file-preview-container';
                        previewContainer.innerHTML = `<label class="label text-secondary">Selected Images Preview</label><div class="row"></div>`;
                        
                        const previewRow = previewContainer.querySelector('.row');
                        
                        // Her dosya için önizleme oluştur
                        for (let i = 0; i < files.length; i++) {
                            const file = files[i];
                            if (!file.type.startsWith('image/')) continue;
                            
                            const previewCol = document.createElement('div');
                            previewCol.className = 'col-md-3 col-sm-4 col-6 mb-3';
                            previewCol.innerHTML = `
                                <img src="${URL.createObjectURL(file)}" class="img-fluid rounded border" alt="Image preview">
                            `;
                            
                            previewRow.appendChild(previewCol);
                        }
                        
                        // Önizleme container'ını ekle
                        parentContainer.appendChild(previewContainer);
                    });
                });
            });
        
            function addListItem(sectionId) {
                const container = document.querySelector(`#list-container-${sectionId} ul`);
                const listItems = container.getElementsByTagName('li');
                const newIndex = listItems.length;
                
                const li = document.createElement('li');
                li.className = 'd-flex align-items-center gap-2 mb-2';
                li.innerHTML = `
                    <input type="text" name="sections[${sectionId}][lists][${newIndex}]" class="form-control" placeholder="List item">
                    <button type="button" class="btn btn-sm btn-danger" onclick="removeListItem(this)">
                        <i class="ri-delete-bin-line"></i>
                    </button>
                `;
                
                container.appendChild(li);
            }
        
            function removeListItem(button) {
                button.closest('li').remove();
            }
            
            function removeImage(button, imageId) {
                // Görseli gizle ve silme işareti koy
                const imageContainer = button.closest('.position-relative');
                imageContainer.style.opacity = '0.5';
                
                // Hidden input'a silme işareti ekle
                document.getElementById(`remove-image-${imageId}`).value = imageId;
                
                // Butonu "geri al" olarak değiştir
                button.classList.remove('btn-danger');
                button.classList.add('btn-warning');
                button.innerHTML = '<i class="ri-arrow-go-back-line"></i>';
                button.onclick = function() { restoreImage(this, imageId); };
            }
            
            function restoreImage(button, imageId) {
                // Görseli geri göster
                const imageContainer = button.closest('.position-relative');
                imageContainer.style.opacity = '1';
                
                // Hidden input'tan silme işaretini kaldır
                document.getElementById(`remove-image-${imageId}`).value = '';
                
                // Butonu "sil" olarak geri değiştir
                button.classList.remove('btn-warning');
                button.classList.add('btn-danger');
                button.innerHTML = '<i class="ri-delete-bin-line"></i>';
                button.onclick = function() { removeImage(this, imageId); };
            }
            
            function saveSection(sectionId) {
                const form = document.getElementById('university-form');
                const formData = new FormData();
                
                // CSRF token ve method ekle
                formData.append('_token', document.querySelector('input[name="_token"]').value);
                formData.append('_method', 'PUT');
                formData.append('section_id', sectionId);
                
                // Section başlığı
                const sectionTitle = document.querySelector(`input[name="sections[${sectionId}][section_title]"]`);
                if (sectionTitle) {
                    formData.append('section_title', sectionTitle.value);
                }
                
                // Section içeriği (Quill editöründen)
                const descriptionInput = document.querySelector(`#description-${sectionId}`);
                if (descriptionInput) {
                    const content = descriptionInput.value;
                    formData.append('description', content);
                    // Debug için konsola yaz
                    console.log('Saving section content:', content);
                }
                
                // Liste öğeleri
                const listItems = document.querySelectorAll(`#list-container-${sectionId} input[type="text"]`);
                listItems.forEach((item, index) => {
                    formData.append(`lists[${index}]`, item.value);
                });
                
                // Dosya yüklemeleri
                const fileInput = document.querySelector(`#file-upload-${sectionId}`);
                if (fileInput && fileInput.files.length > 0) {
                    for (let i = 0; i < fileInput.files.length; i++) {
                        formData.append('images[]', fileInput.files[i]);
                    }
                }
                
                // Silinecek görsel ID'leri
                const removeImages = document.querySelectorAll('input[name="remove_images[]"]');
                removeImages.forEach(input => {
                    if (input.value) {
                        formData.append('remove_images[]', input.value);
                    }
                });

                // FormData içeriğini kontrol et (Debug için)
                for (let pair of formData.entries()) {
                    console.log(pair[0] + ': ' + pair[1]);
                }
                
                // AJAX isteği gönder
                fetch('{{ route("admin.university.turkey.update", $university->id) }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-Section-Update': 'true'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Section Saved',
                            text: data.message || 'Section has been updated successfully',
                            confirmButtonText: 'OK',
                            timer: 2000
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: data.message || 'An error occurred while saving the section',
                            confirmButtonText: 'OK'
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'An unexpected error occurred. Please try again.',
                        confirmButtonText: 'OK'
                    });
                });
            }        
            // Global fonksiyonları tanımla
            window.addListItem = addListItem;
            window.removeListItem = removeListItem;
            window.removeImage = removeImage;
            window.restoreImage = restoreImage;
            window.saveSection = saveSection;
        </script>

    </body>
</html>
