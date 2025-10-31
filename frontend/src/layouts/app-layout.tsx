import AppLayoutTemplate from '@/layouts/app/app-header-layout';
import { type BreadcrumbItem } from '@/types';
import { type ReactNode } from 'react';
import { ThemeProvider } from '@/components/theme-provider';

interface AppLayoutProps {
    children: ReactNode;
    breadcrumbs?: BreadcrumbItem[];
}

export default AppLayout({ children, breadcrumbs, ...props }: AppLayoutProps) => (
    <ThemeProvider>
        <AppLayoutTemplate breadcrumbs={breadcrumbs} {...props}>
            {children}
        </AppLayoutTemplate>
    </ThemeProvider>
);
