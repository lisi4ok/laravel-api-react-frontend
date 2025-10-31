export interface Auth {
    user: User;
}

export interface LinkProps {
    active: boolean;
    label: string;
    url: string;
}

export interface FilterProps {
    search: string;
    perPage: string;
}

export interface BreadcrumbItem {
    title: string;
    href: string;
}

export interface FlashMessage {
    success?: string;
    error?: string;
}

export interface SharedData {
    name: string;
    quote: { message: string; author: string };
    flash?: FlashMessage;
    auth: Auth;
    sidebarOpen: boolean;
    [key: string]: unknown;
}

export interface User {
    id: number;
    name: string;
    email: string;
    avatar?: string;
    email_verified_at: string | null;
    two_factor_enabled?: boolean;
    created_at: string;
    updated_at: string;
    [key: string]: unknown; // This allows for additional properties...
}

export interface Contact {
    id: number;
    name: string;
    email: string;
    phone: string;
    company?: string;
    created_at: string;
    updated_at: string;
    [key: string]: unknown; // This allows for additional properties...
}

export interface Interaction {
    id: number;
    contact_id: number;
    type: string;
    note?: string;
    timestamp: Date|string;
    created_at: string;
    updated_at: string;
    [key: string]: unknown; // This allows for additional properties...
}
