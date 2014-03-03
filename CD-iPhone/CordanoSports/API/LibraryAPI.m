//
//  LibraryAPI.m
//  BlueLibrary
//
//  Created by Eli Ganem on 15/8/13.
//  Copyright (c) 2013 Eli Ganem. All rights reserved.
//

#import "LibraryAPI.h"
#import "PersistencyManager.h"
#import "HTTPClient.h"

@implementation LibraryAPI
{
    PersistencyManager *persistencyManager;
    HTTPClient *httpClient;
    BOOL isOnline;
}

- (id)init
{
    self = [super init];
    if (self) {
        persistencyManager = [[PersistencyManager alloc] init];
        httpClient = [[HTTPClient alloc] init];
        isOnline = NO;
        [[NSNotificationCenter defaultCenter] addObserver:self selector:@selector(downloadImage:) name:@"BLDownloadImageNotification" object:nil];
    }
    return self;
}

- (void)dealloc
{
    [[NSNotificationCenter defaultCenter] removeObserver:self];
}

+ (LibraryAPI*)sharedInstance
{
    // 1
    static LibraryAPI *_sharedInstance = nil;
    
    // 2
    static dispatch_once_t oncePredicate;
    
    // 3
    dispatch_once(&oncePredicate, ^{
        _sharedInstance = [[LibraryAPI alloc] init];
    });
    return _sharedInstance;
}

@end
