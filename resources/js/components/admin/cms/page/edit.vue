<template>
    <div>
<!--        <form  method="post" enctype="multipart/form-data">-->

            <div class="row">
                <h2>Page SEO</h2>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Page Title <span class="error">*</span></label>
                        <input type="text" v-model="title" name="title" class="form-control" required="" placeholder="Page Title" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Page Slug <span class="error">*</span></label>
                        <input type="text" v-model="slug" name="slug" class="form-control" required="" placeholder="Page Slug" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Meta Author <span class="error">*</span></label>
                        <input type="text" v-model="meta_author"  name="meta_author" class="form-control" required="" placeholder="Meta Author" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Meta Title <span class="error">*</span></label>
                        <input type="text" v-model="meta_title.en"  name="meta_title" class="form-control" required="" placeholder="Meta Title" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Meta Description <span class="error">*</span></label>
                        <textarea v-model="meta_description.en"  name="meta_description" class="form-control" required="" placeholder="Meta Description" ></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Meta keyword (Make it comma separate) <span class="error">*</span></label>
                        <input type="text" v-model="meta_keywords"    name="meta_keyword" class="form-control" required="" placeholder="Meta Keyword" >
                    </div>
                </div>

                <h2>Page Content</h2>

                <div v-for="(page_content, index) in page_contents" :key="index">

                    <div class="accordion mt-2" :id="page_content?.module_name">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-success text-white" type="button" data-bs-toggle="collapse"
                                        :data-bs-target="'#collapse' + index" aria-expanded="true"
                                        :aria-controls="'collapse' + index">
                                    {{ cmsCheckChangeKey(page_content?.module_name) }}
                                </button>
                            </h2>
                            <div :id="'collapse' + index" class="accordion-collapse collapse show"
                                 :data-bs-parent="'#' + page_content?.module_name">

                                <!-- hero_section  Start -->
                                <div class="accordion-body" v-if="page_content.module_name === 'hero_section'">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Title <span class="error">*</span></label>
                                                <input type="text" v-model="page_content.content.title"   name="title" class="form-control" required="" placeholder="Title" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Sub Title <span class="error">*</span></label>
                                                <input type="text" v-model="page_content.content.subtitle"  name="sub_title" class="form-control" required="" placeholder="Sub Title" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Button Text <span class="error">*</span></label>
                                                <input type="text" v-model="page_content.content.button_text" name="sub_title" class="form-control" required="" placeholder="Sub Title" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Button URL <span class="error">*</span></label>
                                                <input type="text" v-model="page_content.content.button_url"  name="sub_title" class="form-control" required="" placeholder="Sub Title" >
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Show </label>
                                                <br>
                                                <input class="form-check form-switch"  type="checkbox" :id="'switch' + index"
                                                       :checked="page_content?.status === 'active'" switch="none">
                                                <label class="form-label" :for="'switch'+index" data-on-label="On" data-off-label="Off"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- hero_section  End -->

                                <!-- about_section  Start -->
                                <div class="accordion-body" v-if="page_content.module_name === 'about_section'">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Title <span class="error">*</span></label>
                                                <ckeditor
                                                    v-model="page_content.content.title"
                                                    :config="editorConfig"
                                                    :id="page_content.module_name + '_1'"
                                                >
                                                </ckeditor>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Content <span class="error">*</span></label>
                                                <ckeditor
                                                    v-model="page_content.content.content"
                                                    :config="editorConfig"
                                                    :id="page_content.module_name + '_2'"
                                                >
                                                </ckeditor>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Show </label>
                                                <br>
                                                <input class="form-check form-switch" @change="addCmsContent('status', $event, 'about_section')" type="checkbox" :id="'switch' + index"
                                                       :checked="page_content?.status === 'active'" switch="none">
                                                <label class="form-label" :for="'switch'+index" data-on-label="On" data-off-label="Off"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- about_section  End -->

                                <!-- school_section  Start -->
                                <div class="accordion-body" v-if="page_content.module_name === 'school_section'">

                                    <div v-for="(school, schoolIndex) in page_content?.content?.schools"
                                         :key="schoolIndex"
                                         class="mb-4">

                                        <div class="position-relative p-4 border rounded-3 shadow-sm bg-white">

                                            <!-- Delete button -->
                                            <button type="button"
                                                    class="btn btn-sm btn-danger position-absolute"
                                                    style="top: 0.5rem; right: 0.5rem;"
                                                    @click="removeSchool('school_section', schoolIndex)">
                                                <i class="mdi mdi-trash-can-outline"></i>
                                            </button>

                                            <h6 class="mb-3 text-primary fw-semibold">
                                                School {{ schoolIndex + 1 }}
                                            </h6>

                                            <div class="row g-3 align-items-center">
                                                <!-- School Logo -->
                                                <div class="col-md-6 d-flex align-items-center">
                                                    <!-- Logo Preview -->
                                                    <div>
                                                        <img :src="school.image"
                                                             alt="School Logo"
                                                             class="border rounded"
                                                             style="width: 60px; height: 60px; object-fit: cover;"
                                                        >
                                                    </div>
                                                    <div class="me-3">
                                                        <label class="form-label d-block">School Logo <span class="text-danger">*</span></label>
                                                        <input type="file"
                                                               @change="uploadFileSchoolSectionCms($event, 'school_section',schoolIndex)"
                                                               name="school_logo"
                                                               class="form-control"
                                                               accept="image/png, image/jpeg, image/jpg, image/gif, image/webp"
                                                               required
                                                        >
                                                    </div>
                                                </div>

                                                <!-- Title -->
                                                <div class="col-md-6">
                                                    <label class="form-label">Title <span class="text-danger">*</span></label>
                                                    <input type="text"
                                                           v-model="school.title"
                                                           name="title"
                                                           class="form-control"
                                                           required
                                                           placeholder="Enter school title">
                                                </div>

                                                <!-- Description -->
                                                <div class="col-md-12">
                                                    <label class="form-label">Description <span class="text-danger">*</span></label>
                                                    <ckeditor
                                                        :config="editorConfig"
                                                        v-model="school.description"
                                                        :id="page_content.module_name+'_'+schoolIndex"
                                                    >
                                                    </ckeditor>
                                                </div>

                                                <!-- Button Text -->
                                                <div class="col-md-6">
                                                    <label class="form-label">Button Text <span class="text-danger">*</span></label>
                                                    <input type="text"
                                                           v-model="school.button_text"
                                                           name="button_text"
                                                           class="form-control"
                                                           required
                                                           placeholder="Enter button text">
                                                </div>

                                                <!-- Button URL -->
                                                <div class="col-md-6">
                                                    <label class="form-label">Button URL <span class="text-danger">*</span></label>
                                                    <input type="url"
                                                           v-model="school.button_url"
                                                           name="button_url"
                                                           class="form-control"
                                                           required
                                                           placeholder="https://example.com">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <button @click="addMoreSchoolSection('school_section')" class="btn btn-info btn-sm" type="button">+ Add More</button>
                                </div>
                                <!-- school_section  End -->


                                <!-- industries_section  Start -->
                                <div class="accordion-body" v-if="page_content.module_name === 'industries_section'">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Title <span class="error">*</span></label>
                                                <input type="text" v-model="page_content.content.title"   name="title" class="form-control" required="" placeholder="Title" >
                                            </div>
                                        </div>

                                        <div v-for="(industries, industriesIndex) in page_content?.content?.industries_card"
                                             :key="industriesIndex"
                                             class="mb-4">

                                            <div class="position-relative p-4 border rounded-3 shadow-sm bg-white">

                                                <!-- Delete button -->
                                                <button type="button"
                                                        class="btn btn-sm btn-danger position-absolute"
                                                        style="top: 0.5rem; right: 0.5rem;"
                                                        @click="removeSchool('industries_section', industriesIndex)">
                                                    <i class="mdi mdi-trash-can-outline"></i>
                                                </button>

                                                <h6 class="mb-3 text-primary fw-semibold">
                                                    Industries {{ industriesIndex + 1 }}
                                                </h6>

                                                <div class="row g-3 align-items-center">
                                                    <!-- School Logo -->
                                                    <div class="col-md-6 d-flex align-items-center">
                                                        <!-- Logo Preview -->
                                                        <div>
                                                            <img :src="industries.image"
                                                                 alt="Industries Logo"
                                                                 class="border rounded"
                                                                 style="width: 60px; height: 60px; object-fit: cover;"
                                                            >
                                                        </div>
                                                        <div class="me-3">
                                                            <label class="form-label d-block">Industries Logo <span class="text-danger">*</span></label>
                                                            <input type="file"
                                                                   @change="uploadFileSchoolSectionCms($event,'industries_section', industriesIndex)"
                                                                   name="school_logo"
                                                                   class="form-control"
                                                                   accept="image/png, image/jpeg, image/jpg, image/gif, image/webp"
                                                                   required
                                                            >
                                                        </div>
                                                    </div>

                                                    <!-- Title -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Title <span class="text-danger">*</span></label>
                                                        <input type="text"
                                                               v-model="industries.title"
                                                               name="title"
                                                               class="form-control"
                                                               required
                                                               placeholder="Enter school title">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <button @click="addMoreSchoolSection('industries_section')" class="btn btn-info btn-sm" type="button">+ Add More</button>

                                </div>
                                <!-- industries_section  End -->


                                <!-- why_us_section  Start -->
                                <div class="accordion-body" v-if="page_content.module_name === 'why_us_section'">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Title <span class="error">*</span></label>
                                                <input type="text" v-model="page_content.content.title"   name="title" class="form-control" required="" placeholder="Title" >
                                            </div>
                                        </div>

                                        <div v-for="(reasons, reasonsIndex) in page_content?.content?.reasons"
                                             :key="reasonsIndex"
                                             class="mb-4">

                                            <div class="position-relative p-4 border rounded-3 shadow-sm bg-white">

                                                <!-- Delete button -->
                                                <button type="button"
                                                        class="btn btn-sm btn-danger position-absolute"
                                                        style="top: 0.5rem; right: 0.5rem;"
                                                        @click="removeSchool('why_us_section', reasonsIndex)">
                                                    <i class="mdi mdi-trash-can-outline"></i>
                                                </button>

                                                <h6 class="mb-3 text-primary fw-semibold">
                                                    Why us section {{ reasonsIndex + 1 }}
                                                </h6>

                                                <div class="row g-3 align-items-center">

                                                    <!-- Tap name -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Tap Name <span class="text-danger">*</span></label>
                                                        <input type="text"
                                                               v-model="reasons.title"
                                                               name="tab_name"
                                                               class="form-control"
                                                               required
                                                               placeholder="Tap Name">
                                                    </div>

                                                    <!-- Title -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Title <span class="text-danger">*</span></label>
                                                        <input type="text"
                                                               v-model="reasons.title"
                                                               name="title"
                                                               class="form-control"
                                                               required
                                                               placeholder="Enter school title">
                                                    </div>

                                                    <!-- Description -->
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Description <span class="error">*</span></label>
                                                            <ckeditor
                                                                :config="editorConfig"
                                                                v-model="reasons.description"
                                                                :id="page_content?.content+'_'+reasonsIndex"
                                                            >
                                                            </ckeditor>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <button @click="addMoreSchoolSection('why_us_section')" class="btn btn-info btn-sm" type="button">+ Add More</button>

                                </div>
                                <!-- why_us_section  End -->


                            </div>
                        </div>
                    </div>
                </div>


            </div>

<!--        </form>-->

    </div>
</template>

<script>
export default {
    name: 'cms-page-edit',
    //  get the props value
    props: ["page"],
    data() {
        return {
            editorConfig: {
                height: 80,
                toolbar: [
                    { name: "basicstyles", items: ["Bold", "Italic", "Underline", "TextColor", "BGColor"] },
                    { name: "paragraph", items: ["NumberedList", "BulletedList"] },
                    { name: "links", items: ["Link", "Unlink"] },
                ],
                extraPlugins: "colorbutton,font,colordialog", // 'colordialog' adds advanced color picker
                removePlugins: "elementspath",

                // Optional: allow full color picker with custom hex input
                colorButton_enableAutomatic: true
            },


            title: "",
            slug: "",
            seo_slug: "",
            meta_title: {
                en:""
            },
            meta_description: {
                en:""
            },
            meta_keywords:"",
            meta_robots:"",
            meta_author:"",
            status:"",

        //     Page Content
            page_contents:{}
        };
    },

    methods: {
        onEditorChange(event)
        {
            console.log('Editor change event:', event);
            // const data = event.editor.getData();
            // console.log('Editor content changed:', data);
        },
        addSEOData(inputName, event) {
            console.log('inputName', inputName, event.target.value)
            if(inputName != 'meta_title' &&  inputName != 'meta_description')
            {
                this[inputName] = event.target.value;
            }else{
                this[inputName].en = event.target.value;
            }
        },

        addCmsContent(inputName, event, module_name) {
            console.log('inputName', inputName, event, module_name);


            this.page_contents.forEach((content) => {
                // Hero Section
                if(content.module_name === 'hero_section' ||
                    content.module_name === 'about_section' ||
                    content.module_name === 'school_section' ||
                    content.module_name === 'industries_section'
                ) {
                    if(inputName === 'status')
                    {
                        content.status = event.target.checked ? 'active' : 'inactive';

                    }
                }
            });
        },

        removeSchool(module_name, index=null) {
            console.log('remove module name', module_name);

            if(module_name === 'school_section')
            {
                const content = this.page_contents.find(content =>
                    content?.module_name === 'school_section' &&
                    content?.content?.schools
                );

                if (content) {
                    content.content.schools.splice(index, 1);
                }
            }

            if(module_name === 'industries_section')
            {
                const content = this.page_contents.find(content =>
                    content?.module_name === 'industries_section' &&
                    content?.content?.industries_card
                );

                if (content) {
                    content.content.industries_card.splice(index, 1);
                }
            }

        },
        addMoreSchoolSection(module_name=null) {

            if(module_name === 'school_section')
            {
                let schoolSection = {
                    image: '', // Placeholder image
                    title: '',
                    description: '',
                    button_text: '',
                    button_url: ''
                };

                const content = this.page_contents.find(content =>
                    content?.module_name === 'school_section' &&
                    content?.content?.schools
                );

                if (content) {
                    content.content.schools.push(schoolSection);
                }
            }

            if(module_name === 'industries_section')
            {
                let industries_section = {
                    image: '', // Placeholder image
                    title: ''
                };

                const content = this.page_contents.find(content =>
                    content?.module_name === module_name &&
                    content?.content?.industries_card
                );

                if (content) {
                    content.content.industries_card.push(industries_section);
                }
            }

        },

        async uploadFileSchoolSectionCms(event,moduleName, index=null) {
            console.log('File upload function called', event);

            const file = event.target.files[0];
            if (!file) {
                return;
            }

            // Validate file type
            const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
            if (!allowedTypes.includes(file.type)) {
                this.showSomethingWrong('Please select a valid image file (JPEG, PNG, GIF, WEBP)')
                return;
            }

            try {
                // Create FormData for file upload
                const formData = new FormData();
                formData.append('image', file);

                // Make API call to upload file
                const response = await axios.post('/admin/cms/upload-file-school-section', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                    },
                    onUploadProgress: (progressEvent) => {
                        const percentCompleted = Math.round(
                            (progressEvent.loaded * 100) / progressEvent.total
                        );
                        console.log('Upload progress:', percentCompleted + '%');
                    }
                });
                console.log('Upload response:', moduleName, response);
                if (response.data) {
                    console.log('Upload response:', response.data.file_url);


                    if(moduleName === 'school_section' && index !== null)
                    {
                        // Update the school image in the data
                        const content = this.page_contents.find(content =>
                            content?.module_name === moduleName &&
                            content?.content?.schools
                        );

                        if (content && content.content.schools[index]) {
                            content.content.schools[index].image = response.data.file_url;
                        }
                    }

                    if(moduleName === 'industries_section' && index !== null)
                    {
                        // Update the school image in the data
                        const content = this.page_contents.find(content =>
                            content?.module_name === moduleName &&
                            content?.content?.industries_card
                        );

                        console.log('industries_section content', content, index);

                        if (content && content.content.industries_card[index]) {
                            content.content.industries_card[index].image = response.data.file_url;
                        }
                    }


                    // this.$toast.success('Image uploaded successfully!');
                } else {
                    // this.$toast.error(response.data.message || 'Upload failed');
                }

            } catch (error) {
                console.error('Upload error:', error);
            }
        },

    },

    mounted() {
        console.log('Component mounted. Page data', this.page)
        // set value
        const { title, slug, seo_slug, meta_title, meta_description, meta_keywords, meta_robots, meta_author, status, page_contents } = this.page;
        this.title = title;
        this.slug = slug;
        this.seo_slug = seo_slug;
        this.meta_title = meta_title;
        this.meta_description = meta_description;
        this.meta_keywords = meta_keywords;
        this.meta_robots = meta_robots;
        this.meta_author = meta_author;
        this.status = status;
        this.page_contents = page_contents;
    }
}
</script>
