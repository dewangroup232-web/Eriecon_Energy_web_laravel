@php($editing = isset($post))
<div class="admin-form-grid">
    <div class="admin-field admin-field--full">
        <label class="admin-label" for="title">Article title *</label>
        <input class="admin-input" id="title" name="title" value="{{ old('title', $post->title ?? '') }}" required>
    </div>
    <div class="admin-field">
        <label class="admin-label" for="slug">URL slug *</label>
        <input class="admin-input" id="slug" name="slug" value="{{ old('slug', $post->slug ?? '') }}" required>
        <p class="admin-help">Lowercase letters, numbers and hyphens only.</p>
    </div>
    <div class="admin-field">
        <label class="admin-label" for="category">Category *</label>
        <input class="admin-input" id="category" name="category" value="{{ old('category', $post->category ?? '') }}" required>
    </div>
    <div class="admin-field admin-field--full">
        <label class="admin-label" for="excerpt">Card excerpt *</label>
        <textarea class="admin-textarea" id="excerpt" name="excerpt" required>{{ old('excerpt', $post->excerpt ?? '') }}</textarea>
    </div>
    <div class="admin-field admin-field--full">
        <label class="admin-label" id="contentLabel" for="contentEditor">Full article content *</label>
        <div class="admin-quill-shell">
            <div id="contentEditor" data-quill-editor aria-labelledby="contentLabel"></div>
        </div>
        <textarea id="content" name="content" hidden>{{ old('content', $post->content ?? '') }}</textarea>
        <p class="admin-help">Format headings, text, lists, quotes and links using the editor toolbar. The public page applies the existing premium journal styling.</p>
    </div>
    <div class="admin-field">
        <label class="admin-label" for="author_name">Author *</label>
        <input class="admin-input" id="author_name" name="author_name" value="{{ old('author_name', $post->author_name ?? 'Eirecon Engineering Team') }}" required>
    </div>
    <div class="admin-field">
        <label class="admin-label" for="reading_minutes">Reading time (minutes) *</label>
        <input class="admin-input" id="reading_minutes" name="reading_minutes" type="number" min="1" max="120" value="{{ old('reading_minutes', $post->reading_minutes ?? 5) }}" required>
    </div>
    <div class="admin-field">
        <label class="admin-label" for="status">Status *</label>
        <select class="admin-select" id="status" name="status" required>
            <option value="draft" @selected(old('status', $post->status ?? 'draft') === 'draft')>Draft</option>
            <option value="published" @selected(old('status', $post->status ?? '') === 'published')>Published</option>
        </select>
    </div>
    <div class="admin-field">
        <label class="admin-label" for="published_at">Publish date and time</label>
        <input class="admin-input" id="published_at" name="published_at" type="datetime-local" value="{{ old('published_at', isset($post) && $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : '') }}">
        <p class="admin-help">If left empty for a published post, the current time is used.</p>
    </div>
    <div class="admin-field admin-field--full">
        <label class="admin-label" for="featured_image">Featured image {{ $editing ? '' : '*' }}</label>
        <input class="admin-input" id="featured_image" name="featured_image" type="file" accept=".jpg,.jpeg,.png,.webp" {{ $editing ? '' : 'required' }}>
        @if($editing)<p><img class="admin-preview" src="{{ $post->featured_image_url }}" alt="Current featured image"></p>@endif
    </div>
    <div class="admin-field admin-field--full">
        <label class="admin-label" for="image_alt">Image alternative text</label>
        <input class="admin-input" id="image_alt" name="image_alt" value="{{ old('image_alt', $post->image_alt ?? '') }}">
    </div>
    <div class="admin-field admin-field--full">
        <label class="admin-check"><input type="checkbox" name="is_featured" value="1" @checked(old('is_featured', $post->is_featured ?? false))> Feature this article at the top of the blog page</label>
    </div>
    <div class="admin-field">
        <label class="admin-label" for="seo_title">SEO title</label>
        <input class="admin-input" id="seo_title" name="seo_title" value="{{ old('seo_title', $post->seo_title ?? '') }}">
    </div>
    <div class="admin-field">
        <label class="admin-label" for="seo_description">SEO description</label>
        <textarea class="admin-textarea" id="seo_description" name="seo_description">{{ old('seo_description', $post->seo_description ?? '') }}</textarea>
    </div>
    <div class="admin-form-actions">
        <a class="admin-button admin-button--secondary" href="{{ route('admin.blogs.index') }}">Cancel</a>
        <button class="admin-button" type="submit">{{ $editing ? 'Save changes' : 'Create post' }}</button>
    </div>
</div>

@push('vendor-styles')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const title = document.getElementById('title');
    const slug = document.getElementById('slug');
    if (!title || !slug) return;
    let edited = slug.value.length > 0;
    slug.addEventListener('input', () => edited = true);
    title.addEventListener('input', function () {
        if (edited) return;
        slug.value = title.value.toLowerCase().trim().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '');
    });

    const editorElement = document.querySelector('[data-quill-editor]');
    const contentField = document.getElementById('content');
    const articleForm = editorElement ? editorElement.closest('form') : null;

    if (editorElement && contentField && articleForm && window.Quill) {
        const quill = new Quill(editorElement, {
            theme: 'snow',
            placeholder: 'Write the full article content here...',
            modules: {
                toolbar: [
                    [{ header: [2, 3, false] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ color: [] }, { background: [] }],
                    [{ list: 'ordered' }, { list: 'bullet' }],
                    [{ align: [] }],
                    ['blockquote', 'link'],
                    ['clean']
                ]
            }
        });

        if (contentField.value.trim()) {
            quill.clipboard.dangerouslyPasteHTML(contentField.value);
        }

        const syncContent = function () {
            contentField.value = quill.getSemanticHTML().trim();
        };

        quill.on('text-change', syncContent);

        articleForm.addEventListener('submit', function (event) {
            syncContent();
            const hasText = quill.getText().trim().length > 0;
            const hasEmbed = Boolean(quill.root.querySelector('img, video, iframe'));
            if (!hasText && !hasEmbed) {
                event.preventDefault();
                editorElement.closest('.admin-quill-shell').classList.add('has-error');
                quill.focus();
                return;
            }
            editorElement.closest('.admin-quill-shell').classList.remove('has-error');
        });
    }
});
</script>
@endpush
