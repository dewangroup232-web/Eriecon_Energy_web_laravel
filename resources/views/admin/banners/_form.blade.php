@php($editing = isset($banner))
<div class="admin-form-grid">
    <div class="admin-field">
        <label class="admin-label" for="title">Heading *</label>
        <input class="admin-input" id="title" name="title" value="{{ old('title', $banner->title ?? '') }}" required>
    </div>
    <div class="admin-field">
        <label class="admin-label" for="subtitle">Subheading</label>
        <input class="admin-input" id="subtitle" name="subtitle" value="{{ old('subtitle', $banner->subtitle ?? '') }}">
    </div>
    <div class="admin-field">
        <label class="admin-label" for="cta_text">Button text</label>
        <input class="admin-input" id="cta_text" name="cta_text" value="{{ old('cta_text', $banner->cta_text ?? '') }}">
    </div>
    <div class="admin-field">
        <label class="admin-label" for="cta_url">Button URL</label>
        <input class="admin-input" id="cta_url" name="cta_url" value="{{ old('cta_url', $banner->cta_url ?? '') }}" placeholder="/projects">
    </div>
    <div class="admin-field">
        <label class="admin-label" for="sort_order">Display order *</label>
        <input class="admin-input" id="sort_order" name="sort_order" type="number" min="0" max="999" value="{{ old('sort_order', $banner->sort_order ?? 0) }}" required>
    </div>
    <div class="admin-field">
        <label class="admin-label" for="image_alt">Image alternative text</label>
        <input class="admin-input" id="image_alt" name="image_alt" value="{{ old('image_alt', $banner->image_alt ?? '') }}">
    </div>
    <div class="admin-field admin-field--full">
        <label class="admin-label" for="image">Banner image {{ $editing ? '' : '*' }}</label>
        <input class="admin-input" id="image" name="image" type="file" accept=".jpg,.jpeg,.png,.webp" {{ $editing ? '' : 'required' }}>
        <p class="admin-help">JPG, PNG or WebP, maximum 10 MB. Wide landscape images work best.</p>
        @if($editing)<p><img class="admin-preview" src="{{ $banner->image_url }}" alt="Current banner preview"></p>@endif
    </div>
    <div class="admin-field admin-field--full">
        <label class="admin-check"><input type="checkbox" name="is_active" value="1" @checked(old('is_active', $banner->is_active ?? true))> Show this banner on the homepage</label>
    </div>
    <div class="admin-form-actions">
        <a class="admin-button admin-button--secondary" href="{{ route('admin.banners.index') }}">Cancel</a>
        <button class="admin-button" type="submit">{{ $editing ? 'Save changes' : 'Create banner' }}</button>
    </div>
</div>
